<?php

namespace Grixu\SociusModels\Tests\Operator;

use CreateOperatorRolesTable;
use Grixu\SociusModels\Tests\Helpers\MigrationTest;

class OperatorRoleMigrationTest extends MigrationTest
{
    protected $table = 'operator_roles';

    protected function setUp(): void
    {
        parent::setUp();

        require_once __DIR__ . '/../../migrations/create_operator_roles_table.php.stub';
        $this->obj = new CreateOperatorRolesTable();
    }
}
