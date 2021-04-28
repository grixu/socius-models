<?php

namespace Grixu\SociusModels\Tests\Order;

use CreateOrderElementsTable;
use CreateOrdersTable;
use CreateProductsTable;
use CreateWarehouseTable;
use Grixu\SociusModels\Tests\Helpers\MigrationTest;
use Illuminate\Support\Facades\Schema;

class OrderElementMigrationTest extends MigrationTest
{
    protected $table = 'order_elements';

    protected function setUp(): void
    {
        parent::setUp();

        require_once __DIR__ . '/../../migrations/create_order_elements_table.stub';
        $this->obj = new CreateOrderElementsTable();
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
    public function product_relationship(): void
    {
        require_once __DIR__ . '/../../migrations/create_products_table.stub';
        (new CreateProductsTable())->up();

        $this->up();

        $this->assertTrue(Schema::hasColumn($this->table, 'product_id'));
        $this->assertTrue(Schema::hasColumn($this->table, 'product_index'));
    }

    /** @test */
    public function order_relationship(): void
    {
        require_once __DIR__ . '/../../migrations/create_orders_table.stub';
        (new CreateOrdersTable())->up();

        $this->up();

        $this->assertTrue(Schema::hasColumn($this->table, 'order_id'));
    }
}
