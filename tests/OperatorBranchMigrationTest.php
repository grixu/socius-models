<?php

namespace Grixu\SociusModels\Tests;

use CreateOperatorBranchPivotTable;
use Grixu\SociusModels\Tests\Helpers\MigrationTest;

class OperatorBranchMigrationTest extends MigrationTest
{
    protected $table = 'operator_branch';
    protected $checksum = false;

    protected function setUp(): void
    {
        parent::setUp();

        require_once __DIR__ . '/../migrations/operator/2020_10_01_064502_create_operator_branch_pivot_table.php';
        $this->obj = new CreateOperatorBranchPivotTable();
    }
}
