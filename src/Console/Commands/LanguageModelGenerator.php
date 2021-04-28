<?php

namespace Grixu\SociusModels\Console\Commands;

use Grixu\SociusModels\Console\Abstracts\ModelGenerator;

class LanguageModelGenerator extends ModelGenerator
{
    protected $name = 'socius:language';
    protected $signature = 'socius:language {name} {namespace?} {factory_namespace?}';

    protected $description = 'Create a new local copy of Language model';

    protected function getStub(): string
    {
        return __DIR__ . '/../Stubs/LanguageModel.stub';
    }
}
