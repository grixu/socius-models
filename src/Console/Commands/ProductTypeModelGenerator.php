<?php

namespace Grixu\SociusModels\Console\Commands;

use Grixu\SociusModels\Console\Abstracts\ModelGenerator;

class ProductTypeModelGenerator extends ModelGenerator
{
    protected $name = 'socius:product-type';
    protected $signature = 'socius:product-type {name} {namespace?} {factory_namespace?}';

    protected $description = 'Create a new local copy of Product Type model';

    protected function getStub(): string
    {
        return __DIR__ . '/../Stubs/ProductTypeModel.stub';
    }
}
