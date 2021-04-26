<?php

namespace Grixu\SociusModels\Console\Commands;

use Grixu\SociusModels\Console\Abstracts\FactoryGenerator;

class ProductTypeFactoryGenerator extends FactoryGenerator
{
    protected $name = 'socius:product-type-factory';
    protected $signature = 'socius:product-type-factory {model} {namespace?} {model_namespace?}';

    protected $description = 'Create a new local copy of Product Type factory';

    protected function getStub(): string
    {
        return __DIR__ . '/../Stubs/ProductTypeFactory.stub';
    }
}
