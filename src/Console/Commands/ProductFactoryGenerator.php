<?php

namespace Grixu\SociusModels\Console\Commands;

use Grixu\SociusModels\Console\Abstracts\FactoryGenerator;

class ProductFactoryGenerator extends FactoryGenerator
{
    protected $name = 'socius:product-factory';
    protected $signature = 'socius:product-factory {model} {namespace?} {model_namespace?}';

    protected $description = 'Create a new local copy of Product factory';

    protected function getStub(): string
    {
        return __DIR__ . '/../Stubs/ProductFactory.stub';
    }
}
