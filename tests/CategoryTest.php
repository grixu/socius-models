<?php

namespace Grixu\SociusModels\Tests;

use Grixu\SociusModels\Product\Factories\CategoryFactory;
use Grixu\SociusModels\Product\Models\Category;
use Grixu\SociusModels\Tests\Helpers\ModelTest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CategoryTest extends ModelTest
{
    protected string $model = Category::class;
    protected string $factory = CategoryFactory::class;
    protected string $table = 'categories';
    protected Model $modelInstance;

    /** @test */
    public function parent_relationship(): void
    {
        $this->makeModelInstance();

        $this->assertEquals(BelongsTo::class, get_class($this->modelInstance->parent()));
    }

    protected function makeModelInstance(): void
    {
        $this->migrateProduct();
        $this->modelInstance = $this->model::factory()->create();
    }

    /** @test */
    public function child_relationship(): void
    {
        $this->makeModelInstance();

        $this->assertEquals(HasMany::class, get_class($this->modelInstance->children()));
    }
}
