<?php

namespace Grixu\SociusModels\Tests;

use CreateBrandsTable;
use CreateCategoriesTable;
use CreateOperatorsTable;
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

    /** @test */
    public function category_relationship(): void
    {
        require_once __DIR__ . '/../migrations/product/2020_09_25_081713_create_categories_table.php';
        (new CreateCategoriesTable())->up();

        $this->up();

        $this->assertTrue(Schema::hasColumn($this->table, 'categoryId'));
    }

    /** @test */
    public function operator_relationship_with_constrained(): void
    {
        require_once __DIR__ . '/../migrations/operator/2020_09_30_092119_create_operators_table.php';
        (new CreateOperatorsTable())->up();

        $this->up();

        $this->assertTrue(Schema::hasColumn($this->table, 'operatorId'));
    }

    /** @test */
    public function operator_field_without_constrained(): void
    {
        $this->up();

        $this->assertTrue(Schema::hasColumn($this->table, 'operatorId'));
    }
}
