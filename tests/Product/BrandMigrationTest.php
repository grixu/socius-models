<?php

namespace Grixu\SociusModels\Tests\Product;

use CreateBrandsTable;
use Grixu\SociusModels\Tests\Helpers\MigrationTest;

class BrandMigrationTest extends MigrationTest
{
    protected $table = 'brands';

    protected function setUp(): void
    {
        parent::setUp();

        require_once __DIR__ . '/../../migrations/create_brands_table.stub';
        $this->obj = new CreateBrandsTable();
    }
}
