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

        require_once __DIR__ . '/../../migrations/create_stocks_table.php.stub';
        $this->obj = new CreateStocksTable();
    }

    /** @test */
    public function warehouse_relationship(): void
    {
        require_once __DIR__ . '/../../migrations/create_warehouse_table.php.stub';
        (new CreateWarehouseTable())->up();

        $this->up();

        $this->assertTrue(Schema::hasColumn($this->table, 'warehouseId'));
    }

    /** @test */
    public function customer_relationship(): void
    {
        require_once __DIR__ . '/../../migrations/create_products_table.php.stub';
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
