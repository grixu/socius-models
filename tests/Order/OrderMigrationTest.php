<?php

namespace Grixu\SociusModels\Tests\Order;

use CreateOperatorsTable;
use CreateOrdersTable;
use CreateWarehouseTable;
use Grixu\SociusModels\Tests\Helpers\MigrationTest;
use Illuminate\Support\Facades\Schema;

class OrderMigrationTest extends MigrationTest
{
    protected $table = 'orders';

    protected function setUp(): void
    {
        parent::setUp();

        require_once __DIR__ . '/../../migrations/order/2021_02_25_144019_create_orders_table.php';
        $this->obj = new CreateOrdersTable();
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
    public function operator_relationship(): void
    {
        require_once __DIR__ . '/../../migrations/operator/2020_09_30_092119_create_operators_table.php';
        (new CreateOperatorsTable())->up();

        $this->up();

        $this->assertTrue(Schema::hasColumn($this->table, 'operatorId'));
    }
}
