<?php

namespace Grixu\SociusModels\Tests\Operator;

use CreateOperatorRolesTable;
use CreateOperatorsTable;
use Grixu\SociusModels\Tests\Helpers\MigrationTest;
use Illuminate\Support\Facades\Schema;

class OperatorMigrationTest extends MigrationTest
{
    protected $table = 'operators';

    protected function setUp(): void
    {
        parent::setUp();

        require_once __DIR__ . '/../../migrations/create_operators_table.stub';
        $this->obj = new CreateOperatorsTable();
    }

    /** @test */
    public function role_relationship(): void
    {
        require_once __DIR__ . '/../../migrations/create_operator_roles_table.stub';
        (new CreateOperatorRolesTable())->up();

        $this->up();

        $this->assertTrue(Schema::hasColumn($this->table, 'operator_role_id'));
    }
}
