<?php

namespace Grixu\SociusModels\Tests\Product;

use CreateCategoriesTable;
use Grixu\SociusModels\Tests\Helpers\MigrationTest;

class CategoryMigrationTest extends MigrationTest
{
    protected $table = 'categories';

    protected function setUp(): void
    {
        parent::setUp();

        require_once __DIR__ . '/../../migrations/create_categories_table.stub';
        $this->obj = new CreateCategoriesTable();
    }
}
