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

        require_once __DIR__ . '/../../migrations/create_product_types_table.stub';
        $this->obj = new CreateProductTypesTable();
    }
}
