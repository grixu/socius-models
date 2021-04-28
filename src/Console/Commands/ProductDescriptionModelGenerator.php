<?php

namespace Grixu\SociusModels\Console\Commands;

use Grixu\SociusModels\Console\Abstracts\ModelGenerator;

class ProductDescriptionModelGenerator extends ModelGenerator
{
    protected $name = 'socius:product-description';
    protected $signature = 'socius:product-description {name} {namespace?} {factory_namespace?}';

    protected $description = 'Create a new local copy of Product Description model';

    protected function getStub(): string
    {
        return __DIR__ . '/../Stubs/ProductDescriptionModel.stub';
    }
}
