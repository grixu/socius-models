<?php

namespace Grixu\SociusModels\Tests\Order;

use Grixu\SociusModels\Order\Factories\OrderFactory;
use Grixu\SociusModels\Order\Models\Order;
use Grixu\SociusModels\Tests\Helpers\ModelTestCase;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderTest extends ModelTestCase
{
    protected string $model = Order::class;
    protected string $factory = OrderFactory::class;
    protected string $table = 'orders';
    protected Model $modelInstance;

    /** @test */
    public function operator_relationship()
    {
        $this->makeModelInstance();
        $this->migrateOperator();
        $this->assertEquals(BelongsTo::class, get_class($this->modelInstance->operator()));
    }

    /** @test */
    public function customer_relationship()
    {
        $this->makeModelInstance();
        $this->migrateCustomer();
        $this->assertEquals(BelongsTo::class, get_class($this->modelInstance->customer()));
    }

    protected function makeModelInstance(): void
    {
        $this->migrateOrder();
        $this->modelInstance = $this->model::factory()->create();
    }

    /** @test */
    public function warehouse_relationship(): void
    {
        $this->makeModelInstance();
        $this->migrateWarehouse();

        $this->assertEquals(BelongsTo::class, get_class($this->modelInstance->warehouse()));
    }

    /** @test */
    public function operator_relationship_without_table(): void
    {
        $this->makeModelInstance();

        $this->assertEquals(null, $this->modelInstance->operator());
    }

    /** @test */
    public function warehouse_relationship_without_table(): void
    {
        $this->makeModelInstance();

        $this->assertEquals(null, $this->modelInstance->warehouse());
    }

    /** @test */
    public function customer_relationship_without_table(): void
    {
        $this->makeModelInstance();

        $this->assertEquals(null, $this->modelInstance->customer());
    }
}
