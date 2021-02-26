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

        require_once __DIR__ . '/../../migrations/operator/2020_09_30_082556_create_operator_roles_table.php';
        $this->obj = new CreateOperatorRolesTable();
    }
}
