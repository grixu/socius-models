<?php

namespace Grixu\SociusModels\Tests\Product;

use Grixu\SociusModels\Product\Factories\ProductFactory;
use Grixu\SociusModels\Product\Models\Product;
use Grixu\SociusModels\Tests\Helpers\ModelTestCase;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductTest extends ModelTestCase
{
    protected string $model = Product::class;
    protected string $factory = ProductFactory::class;
    protected string $table = 'products';
    protected Model $modelInstance;

    /** @test */
    public function brand_relationship()
    {
        $this->makeModelInstance();

        $this->assertEquals(BelongsTo::class, get_class($this->modelInstance->brand()));
    }

    protected function makeModelInstance(): void
    {
        $this->migrateProduct();
        $this->modelInstance = $this->model::factory()->create();
    }

    /** @test */
    public function product_type_relationship(): void
    {
        $this->makeModelInstance();

        $this->assertEquals(BelongsTo::class, get_class($this->modelInstance->productType()));
    }

    /** @test */
    public function product_attachments_relationship(): void
    {
        $this->makeModelInstance();

        $this->assertEquals(HasMany::class, get_class($this->modelInstance->attachments()));
    }

    /** @test */
    public function stocks_relationship(): void
    {
        $this->makeModelInstance();
        $this->migrateWarehouse();

        $this->assertEquals(HasMany::class, get_class($this->modelInstance->stocks()));
    }

    /** @test */
    public function stocks_relationship_without_table(): void
    {
        $this->makeModelInstance();

        $this->assertEquals(null, $this->modelInstance->stocks());
    }

    /** @test */
    public function descriptions_relationship(): void
    {
        $this->makeModelInstance();
        $this->migrateDescription();

        $this->assertEquals(HasMany::class, get_class($this->modelInstance->descriptions()));
    }

    /** @test */
    public function descriptions_relationship_without_table(): void
    {
        $this->makeModelInstance();

        $this->assertEquals(null, $this->modelInstance->descriptions());
    }

    /** @test */
    public function category_relationship(): void
    {
        $this->makeModelInstance();

        $this->assertEquals(BelongsTo::class, get_class($this->modelInstance->category()));
    }
}
