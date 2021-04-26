<?php

namespace Grixu\SociusModels\Tests\Description;

use CreateLanguagesTable;
use Grixu\SociusModels\Tests\Helpers\MigrationTest;

class LanguageMigrationTest extends MigrationTest
{
    protected $table = 'languages';

    protected function setUp(): void
    {
        parent::setUp();

        require_once __DIR__ . '/../../migrations/create_languages_table.php.stub';
        $this->obj = new CreateLanguagesTable();
    }
}
