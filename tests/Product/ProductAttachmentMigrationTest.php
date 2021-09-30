<?php

namespace Grixu\SociusModels\Tests\Product;

use CreateLanguagesTable;
use CreateProductAttachmentsTable;
use CreateProductsTable;
use Grixu\SociusModels\Tests\Helpers\MigrationTest;
use Illuminate\Support\Facades\Schema;

class ProductAttachmentMigrationTest extends MigrationTest
{
    protected $table = 'product_attachments';

    protected function setUp(): void
    {
        parent::setUp();

        require_once __DIR__ . '/../../migrations/create_products_table.stub';
        $this->obj = new CreateProductsTable();
        require_once __DIR__ . '/../../migrations/create_product_attachments_table.stub';
        $this->obj = new CreateProductAttachmentsTable();
    }

    /** @test */
    public function product_relationship(): void
    {
        $this->up();

        $this->assertTrue(Schema::hasColumn($this->table, 'product_id'));
    }

    /** @test */
    public function language_relationship(): void
    {
        require_once __DIR__ . '/../../migrations/create_languages_table.stub';
        (new CreateLanguagesTable())->up();

        $this->up();

        $this->assertTrue(Schema::hasColumn($this->table, 'language_id'));
    }
}
