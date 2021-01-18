<?php

namespace Grixu\SociusModels\Tests;

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

        require_once __DIR__ . '/../migrations/description/2020_10_05_100104_create_product_descriptions_table.php';
        $this->obj = new CreateProductDescriptionsTable();
    }

    public function product_relationship(): void
    {
        require_once __DIR__ . '/../migrations/product/2020_09_25_081823_create_products_table.php';
        (new CreateProductsTable())->up();

        $this->up();

        $this->assertTrue(Schema::hasColumn($this->table, 'productId'));
    }

    /** @test */
    public function language_relationship(): void
    {
        require_once __DIR__ . '/../migrations/description/2020_10_05_085814_create_languages_table.php';
        (new CreateLanguagesTable())->up();

        $this->up();

        $this->assertTrue(Schema::hasColumn($this->table, 'languageId'));
    }
}
