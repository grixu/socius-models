<?php

namespace Grixu\SociusModels\Tests;

use CreateCustomersTable;
use Grixu\SociusModels\Tests\Helpers\MigrationTest;

class CustomerMigrationTest extends MigrationTest
{
    protected $table = 'customers';

    protected function setUp(): void
    {
        parent::setUp();

        require_once __DIR__ . '/../migrations/customer/2020_09_30_102037_create_customers_table.php';
        $this->obj = new CreateCustomersTable();
    }
}
