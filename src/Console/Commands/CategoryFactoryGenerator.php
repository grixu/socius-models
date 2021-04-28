<?php

namespace Grixu\SociusModels\Console\Commands;

use Grixu\SociusModels\Console\Abstracts\FactoryGenerator;

class CategoryFactoryGenerator extends FactoryGenerator
{
    protected $name = 'socius:category-factory';
    protected $signature = 'socius:category-factory {model} {namespace?} {model_namespace?}';

    protected $description = 'Create a new local copy of Category factory';

    protected function getStub(): string
    {
        return __DIR__ . '/../Stubs/CategoryFactory.stub';
    }
}
