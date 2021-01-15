<?php

namespace Grixu\SociusModels\Tests;

use Grixu\SociusModels\Product\Factories\ProductTypeFactory;
use Grixu\SociusModels\Product\Models\ProductType;
use Grixu\SociusModels\Tests\Helpers\ModelTest;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductTypeTest extends ModelTest
{
    protected string $model = ProductType::class;
    protected string $factory = ProductTypeFactory::class;
    protected string $table = 'product_types';

    /** @test */
    public function products_relationship(): void
    {
        $this->migrateProduct();
        $modelInstance = $this->model::factory()->create();

        $this->assertEquals(HasMany::class, get_class($modelInstance->products()));
    }
}
