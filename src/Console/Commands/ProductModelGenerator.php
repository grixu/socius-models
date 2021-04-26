<?php

namespace Grixu\SociusModels\Console\Commands;

use Grixu\SociusModels\Console\Abstracts\ModelGenerator;

class ProductModelGenerator extends ModelGenerator
{
    protected $name = 'socius:product';
    protected $signature = 'socius:product {name} {namespace?} {factory_namespace?}';

    protected $description = 'Create a new local copy of Product model';

    protected function getStub(): string
    {
        return __DIR__ . '/../Stubs/ProductModel.stub';
    }
}
