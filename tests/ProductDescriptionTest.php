<?php

namespace Grixu\SociusModels\Tests;

use Grixu\SociusModels\Description\Factories\ProductDescriptionFactory;
use Grixu\SociusModels\Description\Models\ProductDescription;
use Grixu\SociusModels\Tests\Helpers\ModelTest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductDescriptionTest extends ModelTest
{
    protected string $model = ProductDescription::class;
    protected string $factory = ProductDescriptionFactory::class;
    protected string $table = 'product_descriptions';
    protected Model $modelInstance;

    /** @test */
    public function language_relationship(): void
    {
        $this->makeModelInstance();

        $this->assertEquals(BelongsTo::class, get_class($this->modelInstance->language()));
    }

    protected function makeModelInstance(): void
    {
        $this->migrateDescription();
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
