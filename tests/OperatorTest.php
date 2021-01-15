<?php

namespace Grixu\SociusModels\Tests;

use Grixu\SociusModels\Operator\Factories\OperatorFactory;
use Grixu\SociusModels\Operator\Models\Operator;
use Grixu\SociusModels\Tests\Helpers\ModelTest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class OperatorTest extends ModelTest
{
    protected string $model = Operator::class;
    protected string $factory = OperatorFactory::class;
    protected string $table = 'operators';
    protected Model $modelInstance;

    /** @test */
    public function customers_relationship(): void
    {
        $this->makeModelInstance();
        $this->migrateCustomer();

        $this->assertEquals(HasMany::class, get_class($this->modelInstance->customers()));
    }

    protected function makeModelInstance(): void
    {
        $this->migrateOperator();
        $this->modelInstance = $this->model::factory()->create();
    }

    /** @test */
    public function customers_relationship_without_table(): void
    {
        $this->makeModelInstance();

        $this->assertEquals(null, $this->modelInstance->customers());
    }

    /** @test */
    public function role_relationship(): void
    {
        $this->makeModelInstance();

        $this->assertEquals(BelongsTo::class, get_class($this->modelInstance->role()));
    }

    /** @test */
    public function branches_relationship(): void
    {
        $this->makeModelInstance();

        $this->assertEquals(BelongsToMany::class, get_class($this->modelInstance->branches()));
    }
}
