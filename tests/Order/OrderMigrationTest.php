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

        require_once __DIR__ . '/../../migrations/create_orders_table.php.stub';
        $this->obj = new CreateOrdersTable();
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
    public function operator_relationship(): void
    {
        require_once __DIR__ . '/../../migrations/create_operators_table.php.stub';
        (new CreateOperatorsTable())->up();

        $this->up();

        $this->assertTrue(Schema::hasColumn($this->table, 'operatorId'));
    }
}
