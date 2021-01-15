<?php

namespace Grixu\SociusModels\Tests;

use CreateCustomersTable;
use CreateOperatorsTable;
use CreateWarehouseTable;
use Grixu\SociusModels\Tests\Helpers\MigrationTest;
use Illuminate\Support\Facades\Schema;

class WarehouseMigrationTest extends MigrationTest
{
    protected $table = 'warehouses';

    protected function setUp(): void
    {
        parent::setUp();

        require_once __DIR__ . '/../migrations/warehouse/2020_10_02_063622_create_warehouse_table.php';
        $this->obj = new CreateWarehouseTable();
    }

    /** @test */
    public function customer_relationship(): void
    {
        require_once __DIR__ . '/../migrations/customer/2020_09_30_102037_create_customers_table.php';
        (new CreateCustomersTable())->up();

        $this->up();

        $this->assertTrue(Schema::hasColumn($this->table, 'customer_id'));
    }

    /** @test */
    public function operator_relationship(): void
    {
        require_once __DIR__ . '/../migrations/operator/2020_09_30_092119_create_operators_table.php';
        (new CreateOperatorsTable())->up();

        $this->up();

        $this->assertTrue(Schema::hasColumn($this->table, 'operator_id'));
    }
}
