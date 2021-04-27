<?php

namespace Grixu\SociusModels\Tests\Warehouse;

use CreateCustomersTable;
use CreateWarehouseTable;
use Grixu\SociusModels\Tests\Helpers\MigrationTest;
use Illuminate\Support\Facades\Schema;

class WarehouseMigrationTest extends MigrationTest
{
    protected $table = 'warehouses';

    protected function setUp(): void
    {
        parent::setUp();

        require_once __DIR__ . '/../../migrations/create_warehouse_table.php.stub';
        $this->obj = new CreateWarehouseTable();
    }

    /** @test */
    public function customer_relationship(): void
    {
        require_once __DIR__ . '/../../migrations/create_customers_table.php.stub';
        (new CreateCustomersTable())->up();

        $this->up();

        $this->assertTrue(Schema::hasColumn($this->table, 'customer_id'));
    }

    /** @test */
    public function customer_field_without_constrained(): void
    {
        $this->up();

        $this->assertTrue(Schema::hasColumn($this->table, 'customer_id'));
    }
}
