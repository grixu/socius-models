<?php

namespace Grixu\SociusModels\Console\Commands;

use Grixu\SociusModels\Console\Abstracts\ModelGenerator;

class BrandModelGenerator extends ModelGenerator
{
    protected $name = 'socius:brand';
    protected $signature = 'socius:brand {name} {namespace?} {factory_namespace?}';

    protected $description = 'Create a new local copy of Brand model';

    protected function getStub(): string
    {
        return __DIR__ . '/../Stubs/BrandModel.stub';
    }
}
