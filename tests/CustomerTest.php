<?php

namespace Grixu\SociusModels\Tests;

use Grixu\SociusModels\Customer\Factories\CustomerFactory;
use Grixu\SociusModels\Customer\Models\Customer;
use Grixu\SociusModels\Tests\Helpers\ModelTest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CustomerTest extends ModelTest
{
    protected string $model = Customer::class;
    protected string $factory = CustomerFactory::class;
    protected string $table = 'customers';
    protected Model $modelInstance;

    /** @test */
    public function operator_relationship(): void
    {
        $this->migrateOperator();
        $this->makeModelInstance();

        $this->assertEquals(BelongsTo::class, get_class($this->modelInstance->operator()));
    }

    protected function makeModelInstance(): void
    {
        $this->migrateCustomer();
        $this->modelInstance = $this->model::factory()->create();
    }

    /** @test */
    public function operator_relationship_without_table(): void
    {
        $this->makeModelInstance();

        $this->assertEquals(null, $this->modelInstance->operator());
    }
}
