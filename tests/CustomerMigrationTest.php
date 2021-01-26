<?php

namespace Grixu\SociusModels\Tests;

use CreateCustomersTable;
use CreateOperatorsTable;
use Grixu\SociusModels\Tests\Helpers\MigrationTest;
use Illuminate\Support\Facades\Schema;

class CustomerMigrationTest extends MigrationTest
{
    protected $table = 'customers';

    protected function setUp(): void
    {
        parent::setUp();

        require_once __DIR__ . '/../migrations/customer/2020_09_30_102037_create_customers_table.php';
        $this->obj = new CreateCustomersTable();
    }

    /** @test */
    public function operator_relationship(): void
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
