<?php

namespace Grixu\SociusModels\Tests;

use CreateLanguagesTable;
use Grixu\SociusModels\Tests\Helpers\MigrationTest;

class LanguageMigrationTest extends MigrationTest
{
    protected $table = 'languages';

    protected function setUp(): void
    {
        parent::setUp();

        require_once __DIR__ . '/../migrations/description/2020_10_05_085814_create_languages_table.php';
        $this->obj = new CreateLanguagesTable();
    }
}
