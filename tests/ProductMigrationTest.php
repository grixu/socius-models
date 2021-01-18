<?php

namespace Grixu\SociusModels\Tests;

use CreateBrandsTable;
use CreateProductsTable;
use CreateProductTypesTable;
use Grixu\SociusModels\Tests\Helpers\MigrationTest;
use Illuminate\Support\Facades\Schema;

class ProductMigrationTest extends MigrationTest
{
    protected $table = 'products';

    protected function setUp(): void
    {
        parent::setUp();

        require_once __DIR__ . '/../migrations/product/2020_09_25_081823_create_products_table.php';
        $this->obj = new CreateProductsTable();
    }

    /** @test */
    public function brand_relationship(): void
    {
        require_once __DIR__ . '/../migrations/product/2020_09_25_081701_create_brands_table.php';
        (new CreateBrandsTable())->up();

        $this->up();

        $this->assertTrue(Schema::hasColumn($this->table, 'brandId'));
    }

    /** @test */
    public function product_type_relationship(): void
    {
        require_once __DIR__ . '/../migrations/product/2020_09_25_081724_create_product_types_table.php';
        (new CreateProductTypesTable())->up();

        $this->up();

        $this->assertTrue(Schema::hasColumn($this->table, 'productTypeId'));
    }
}
