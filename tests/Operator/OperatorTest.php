<?php

namespace Grixu\SociusModels\Tests\Operator;

use Grixu\SociusModels\Operator\Factories\OperatorFactory;
use Grixu\SociusModels\Operator\Models\Operator;
use Grixu\SociusModels\Tests\Helpers\ModelTestCase;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class OperatorTest extends ModelTestCase
{
    protected string $model = Operator::class;
    protected string $factory = OperatorFactory::class;
    protected string $table = 'operators';
    protected Model $modelInstance;

    protected function makeModelInstance(): void
    {
        $this->migrateOperator();
        $this->modelInstance = $this->model::factory()->create();
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
