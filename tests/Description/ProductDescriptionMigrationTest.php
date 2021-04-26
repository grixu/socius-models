<?php

namespace Grixu\SociusModels\Tests\Description;

use CreateLanguagesTable;
use CreateProductDescriptionsTable;
use CreateProductsTable;
use Grixu\SociusModels\Tests\Helpers\MigrationTest;
use Illuminate\Support\Facades\Schema;

class ProductDescriptionMigrationTest extends MigrationTest
{
    protected $table = 'product_descriptions';

    protected function setUp(): void
    {
        parent::setUp();

        require_once __DIR__ . '/../../migrations/create_product_descriptions_table.php.stub';
        $this->obj = new CreateProductDescriptionsTable();
    }

    public function product_relationship(): void
    {
        require_once __DIR__ . '/../../migrations/create_products_table.php.stub';
        (new CreateProductsTable())->up();

        $this->up();

        $this->assertTrue(Schema::hasColumn($this->table, 'productId'));
    }

    /** @test */
    public function language_relationship(): void
    {
        require_once __DIR__ . '/../../migrations/create_languages_table.php.stub';
        (new CreateLanguagesTable())->up();

        $this->up();

        $this->assertTrue(Schema::hasColumn($this->table, 'languageId'));
    }
}
