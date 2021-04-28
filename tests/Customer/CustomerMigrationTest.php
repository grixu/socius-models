<?php

namespace Grixu\SociusModels\Tests\Customer;

use CreateCustomersTable;
use Grixu\SociusModels\Tests\Helpers\MigrationTest;

class CustomerMigrationTest extends MigrationTest
{
    protected $table = 'customers';

    protected function setUp(): void
    {
        parent::setUp();

        require_once __DIR__ . '/../../migrations/create_customers_table.stub';
        $this->obj = new CreateCustomersTable();
    }
}
