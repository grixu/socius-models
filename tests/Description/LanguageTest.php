<?php

namespace Grixu\SociusModels\Tests\Description;

use Grixu\SociusModels\Description\Factories\LanguageFactory;
use Grixu\SociusModels\Description\Models\Language;
use Grixu\SociusModels\Tests\Helpers\ModelTestCase;
use Illuminate\Database\Eloquent\Relations\HasMany;

class LanguageTest extends ModelTestCase
{
    protected string $model = Language::class;
    protected string $factory = LanguageFactory::class;
    protected string $table = 'languages';

    /** @test */
    public function descriptions_relationship(): void
    {
        $this->migrateDescription();
        $modelInstance = $this->model::factory()->create();

        $this->assertEquals(HasMany::class, get_class($modelInstance->descriptions()));
    }
}
