<?php

namespace Grixu\SociusModels\Tests\Warehouse;

use Grixu\SociusModels\Tests\Helpers\ModelTestCase;
use Grixu\SociusModels\Warehouse\Factories\StockFactory;
use Grixu\SociusModels\Warehouse\Models\Stock;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StockTest extends ModelTestCase
{
    protected string $model = Stock::class;
    protected string $factory = StockFactory::class;
    protected string $table = 'stocks';
    protected Model $modelInstance;

    /** @test */
    public function warehouse_relationship(): void
    {
        $this->makeModelInstance();

        $this->assertEquals(BelongsTo::class, get_class($this->modelInstance->warehouse()));
    }

    protected function makeModelInstance(): void
    {
        $this->migrateWarehouse();
        $this->modelInstance = $this->model::factory()->create();
    }

    /** @test */
    public function product_relationship(): void
    {
        $this->migrateProduct();
        $this->makeModelInstance();

        $this->assertEquals(BelongsTo::class, get_class($this->modelInstance->product()));
    }

    /** @test */
    public function product_relationship_without_table(): void
    {
        $this->makeModelInstance();

        $this->assertEquals(null, $this->modelInstance->product());
    }
}
