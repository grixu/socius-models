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

        require_once __DIR__ . '/../../migrations/product/2020_09_25_081701_create_brands_table.php';
        $this->obj = new CreateBrandsTable();
    }
}
