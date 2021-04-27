<?php

namespace Grixu\SociusModels\Tests\Product;

use CreateBrandsTable;
use CreateCategoriesTable;
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

        require_once __DIR__ . '/../../migrations/create_products_table.php.stub';
        $this->obj = new CreateProductsTable();
    }

    /** @test */
    public function brand_relationship(): void
    {
        require_once __DIR__ . '/../../migrations/create_brands_table.php.stub';
        (new CreateBrandsTable())->up();

        $this->up();

        $this->assertTrue(Schema::hasColumn($this->table, 'brand_id'));
    }

    /** @test */
    public function product_type_relationship(): void
    {
        require_once __DIR__ . '/../../migrations/create_product_types_table.php.stub';
        (new CreateProductTypesTable())->up();

        $this->up();

        $this->assertTrue(Schema::hasColumn($this->table, 'product_type_id'));
    }

    /** @test */
    public function category_relationship(): void
    {
        require_once __DIR__ . '/../../migrations/create_categories_table.php.stub';
        (new CreateCategoriesTable())->up();

        $this->up();

        $this->assertTrue(Schema::hasColumn($this->table, 'category_id'));
    }
}
