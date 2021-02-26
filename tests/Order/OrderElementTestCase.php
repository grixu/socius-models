<?php

namespace Grixu\SociusModels\Tests\Order;

use Grixu\SociusModels\Order\Factories\OrderElementFactory;
use Grixu\SociusModels\Order\Models\OrderElement;
use Grixu\SociusModels\Tests\Helpers\ModelTestCase;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderElementTestCase extends ModelTestCase
{
    protected string $model = OrderElement::class;
    protected string $factory = OrderElementFactory::class;
    protected string $table = 'orders';
    protected Model $modelInstance;

    /** @test */
    public function product_relationship()
    {
        $this->makeModelInstance();
        $this->migrateProduct();
        $this->assertEquals(BelongsTo::class, get_class($this->modelInstance->product()));
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
    public function order_relationship(): void
    {
        $this->makeModelInstance();

        $this->assertEquals(BelongsTo::class, get_class($this->modelInstance->order()));
    }

    /** @test */
    public function product_relationship_without_table(): void
    {
        $this->makeModelInstance();

        $this->assertEquals(null, $this->modelInstance->product());
    }

    /** @test */
    public function warehouse_relationship_without_table(): void
    {
        $this->makeModelInstance();

        $this->assertEquals(null, $this->modelInstance->warehouse());
    }
}
