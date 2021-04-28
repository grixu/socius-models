<?php

namespace Grixu\SociusModels\Tests\Operator;

use CreateBranchesTable;
use Grixu\SociusModels\Tests\Helpers\MigrationTest;

class BranchMigrationTest extends MigrationTest
{
    protected $table = 'branches';

    protected function setUp(): void
    {
        parent::setUp();

        require_once __DIR__ . '/../../migrations/create_branches_table.stub';
        $this->obj = new CreateBranchesTable();
    }
}
