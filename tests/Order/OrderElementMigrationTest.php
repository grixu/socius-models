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

        require_once __DIR__ . '/../../migrations/order/2021_02_25_144519_create_order_elements_table.php';
        $this->obj = new CreateOrderElementsTable();
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
    public function product_relationship(): void
    {
        require_once __DIR__ . '/../../migrations/product/2020_09_25_081823_create_products_table.php';
        (new CreateProductsTable())->up();

        $this->up();

        $this->assertTrue(Schema::hasColumn($this->table, 'productId'));
        $this->assertTrue(Schema::hasColumn($this->table, 'productIndex'));
    }

    /** @test */
    public function order_relationship(): void
    {
        require_once __DIR__ . '/../../migrations/order/2021_02_25_144019_create_orders_table.php';
        (new CreateOrdersTable())->up();

        $this->up();

        $this->assertTrue(Schema::hasColumn($this->table, 'orderId'));
    }
}
