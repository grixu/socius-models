<?php

namespace Grixu\SociusModels\Tests\Product;

use Grixu\SociusModels\Product\Factories\ProductAttachmentFactory;
use Grixu\SociusModels\Product\Models\ProductAttachment;
use Grixu\SociusModels\Tests\Helpers\ModelTestCase;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductAttachmentTest extends ModelTestCase
{
    protected string $model = ProductAttachment::class;
    protected string $factory = ProductAttachmentFactory::class;
    protected string $table = 'product_attachments';
    protected Model $modelInstance;

    /** @test */
    public function product_relationship(): void
    {
        $this->makeModelInstance();

        $this->assertEquals(BelongsTo::class, get_class($this->modelInstance->product()));
    }

    protected function makeModelInstance(): void
    {
        $this->migrateProduct();
        $this->modelInstance = $this->model::factory()->create();
    }

    /** @test */
    public function language_relationship(): void
    {
        $this->makeModelInstance();
        $this->migrateDescription();

        $this->assertEquals(BelongsTo::class, get_class($this->modelInstance->language()));
    }

    /** @test */
    public function language_relationship_without_table(): void
    {
        $this->makeModelInstance();

        $this->assertEquals(null, $this->modelInstance->language());
    }
}
