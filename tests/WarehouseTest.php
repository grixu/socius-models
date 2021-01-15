<?php

namespace Grixu\SociusModels\Tests;

use Grixu\SociusModels\Tests\Helpers\ModelTest;
use Grixu\SociusModels\Warehouse\Factories\WarehouseFactory;
use Grixu\SociusModels\Warehouse\Models\Warehouse;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class WarehouseTest extends ModelTest
{
    protected string $model = Warehouse::class;
    protected string $factory = WarehouseFactory::class;
    protected string $table = 'warehouses';
    protected Model $modelInstance;

    /** @test */
    public function customer_relationship(): void
    {
        $this->migrateCustomer();
        $this->makeModelInstance();

        $this->assertEquals(BelongsTo::class, get_class($this->modelInstance->customer()));
    }

    protected function makeModelInstance(): void
    {
        $this->migrateWarehouse();
        $this->modelInstance = $this->model::factory()->create();
    }

    /** @test */
    public function customer_relationship_without_table(): void
    {
        $this->makeModelInstance();

        $this->assertEquals(null, $this->modelInstance->customer());
    }

    /** @test */
    public function operator_relationship(): void
    {
        $this->migrateOperator();
        $this->makeModelInstance();

        $this->assertEquals(BelongsTo::class, get_class($this->modelInstance->operator()));
    }

    /** @test */
    public function operator_relationship_without_table(): void
    {
        $this->makeModelInstance();

        $this->assertEquals(null, $this->modelInstance->operator());
    }

    /** @test */
    public function stocks_relationship(): void
    {
        $this->makeModelInstance();

        $this->assertEquals(HasMany::class, get_class($this->modelInstance->stocks()));
    }
}
