<?php

namespace Grixu\SociusModels\Tests;

use CreateBranchesTable;
use Grixu\SociusModels\Tests\Helpers\MigrationTest;

class BranchMigrationTest extends MigrationTest
{
    protected $table = 'branches';

    protected function setUp(): void
    {
        parent::setUp();

        require_once __DIR__ . '/../migrations/operator/2020_09_30_135749_create_branches_table.php';
        $this->obj = new CreateBranchesTable();
    }
}
