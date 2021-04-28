<?php

namespace Grixu\SociusModels\Console\Commands;

use Grixu\SociusModels\Console\Abstracts\FactoryGenerator;

class ProductDescriptionFactoryGenerator extends FactoryGenerator
{
    protected $name = 'socius:product-description-factory';
    protected $signature = 'socius:product-description-factory {model} {namespace?} {model_namespace?}';

    protected $description = 'Create a new local copy of Product Description factory';

    protected function getStub(): string
    {
        return __DIR__ . '/../Stubs/ProductDescriptionFactory.stub';
    }
}
