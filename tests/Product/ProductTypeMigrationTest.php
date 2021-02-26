<?php

namespace Grixu\SociusModels\Tests\Product;

use CreateProductTypesTable;
use Grixu\SociusModels\Tests\Helpers\MigrationTest;

class ProductTypeMigrationTest extends MigrationTest
{
    protected $table = 'product_types';

    protected function setUp(): void
    {
        parent::setUp();

        require_once __DIR__ . '/../../migrations/product/2020_09_25_081724_create_product_types_table.php';
        $this->obj = new CreateProductTypesTable();
    }
}
