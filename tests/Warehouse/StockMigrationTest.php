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

        require_once __DIR__ . '/../../migrations/create_stocks_table.stub';
        $this->obj = new CreateStocksTable();
    }

    /** @test */
    public function warehouse_relationship(): void
    {
        require_once __DIR__ . '/../../migrations/create_warehouse_table.stub';
        (new CreateWarehouseTable())->up();

        $this->up();

        $this->assertTrue(Schema::hasColumn($this->table, 'warehouse_id'));
    }

    /** @test */
    public function customer_relationship(): void
    {
        require_once __DIR__ . '/../../migrations/create_products_table.stub';
        (new CreateProductsTable())->up();

        $this->up();

        $this->assertTrue(Schema::hasColumn($this->table, 'product_id'));
    }

    /** @test */
    public function customer_field_without_constrained(): void
    {
        $this->up();

        $this->assertTrue(Schema::hasColumn($this->table, 'product_id'));
    }
}
