<?php

namespace Grixu\SociusModels\Console\Commands;

use Grixu\SociusModels\Console\Abstracts\ModelGenerator;

class CategoryModelGenerator extends ModelGenerator
{
    protected $name = 'socius:category';
    protected $signature = 'socius:category {name} {namespace?} {factory_namespace?}';

    protected $description = 'Create a new local copy of Category model';

    protected function getStub(): string
    {
        return __DIR__ . '/../Stubs/CategoryModel.stub';
    }
}
