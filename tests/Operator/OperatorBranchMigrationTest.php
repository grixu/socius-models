<?php

namespace Grixu\SociusModels\Tests\Operator;

use CreateOperatorBranchPivotTable;
use Grixu\SociusModels\Tests\Helpers\MigrationTest;

class OperatorBranchMigrationTest extends MigrationTest
{
    protected $table = 'operator_branch';
    protected $checksum = false;

    protected function setUp(): void
    {
        parent::setUp();

        require_once __DIR__ . '/../../migrations/create_operator_branch_pivot_table.php.stub';
        $this->obj = new CreateOperatorBranchPivotTable();
    }
}
