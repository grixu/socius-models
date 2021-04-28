<?php

namespace Grixu\SociusModels\Console\Commands;

use Grixu\SociusModels\Console\Abstracts\ModelGenerator;

class StockModelGenerator extends ModelGenerator
{
    protected $name = 'socius:stock';
    protected $signature = 'socius:stock {name} {namespace?} {factory_namespace?}';

    protected $description = 'Create a new local copy of Stock model';

    protected function getStub(): string
    {
        return __DIR__ . '/../Stubs/StockModel.stub';
    }
}
