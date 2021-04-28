<?php

namespace Grixu\SociusModels\Console\Commands;

use Grixu\SociusModels\Console\Abstracts\FactoryGenerator;

class LanguageFactoryGenerator extends FactoryGenerator
{
    protected $name = 'socius:language-factory';
    protected $signature = 'socius:language-factory {model} {namespace?} {model_namespace?}';

    protected $description = 'Create a new local copy of Language factory';

    protected function getStub(): string
    {
        return __DIR__ . '/../Stubs/LanguageFactory.stub';
    }
}
