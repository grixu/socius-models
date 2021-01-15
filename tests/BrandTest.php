<?php

namespace Grixu\SociusModels\Tests;

use Grixu\SociusModels\Product\Factories\BrandFactory;
use Grixu\SociusModels\Product\Models\Brand;
use Grixu\SociusModels\Tests\Helpers\ModelTest;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BrandTest extends ModelTest
{
    protected string $model = Brand::class;
    protected string $factory = BrandFactory::class;
    protected string $table = 'brands';

    /** @test */
    public function products_relationship(): void
    {
        $this->migrateProduct();
        $model = $this->model::factory()->create();

        $this->assertEquals(HasMany::class, get_class($model->products()));
    }
}
