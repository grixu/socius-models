<?php

namespace Grixu\SociusModels\Tests\Warehouse;

use CreateProductsTable;
use CreateStocksTable;
use CreateWarehouseTable;
use Grixu\SociusModels\Tests\Helpers\MigrationTest;
use Illuminate\Support\Facades\Schema;

class StockMigrationTest extends MigrationTest
{
    protected $table = 'stocks';

    protected function setUp(): void
    {
        parent::setUp();

        require_once __DIR__ . '/../../migrations/warehouse/2020_10_02_063647_create_stocks_table.php';
        $this->obj = new CreateStocksTable();
    }

    /** @test */
    public function warehouse_relationship(): void
    {
        require_once __DIR__ . '/../../migrations/warehouse/2020_10_02_063622_create_warehouse_table.php';
        (new CreateWarehouseTable())->up();

        $this->up();

        $this->assertTrue(Schema::hasColumn($this->table, 'warehouseId'));
    }

    /** @test */
    public function customer_relationship(): void
    {
        require_once __DIR__ . '/../../migrations/product/2020_09_25_081823_create_products_table.php';
        (new CreateProductsTable())->up();

        $this->up();

        $this->assertTrue(Schema::hasColumn($this->table, 'productId'));
    }

    /** @test */
    public function customer_field_without_constrained(): void
    {
        $this->up();

        $this->assertTrue(Schema::hasColumn($this->table, 'productId'));
    }
}
