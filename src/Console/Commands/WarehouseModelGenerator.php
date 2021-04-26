<?php

namespace Grixu\SociusModels\Console\Commands;

use Grixu\SociusModels\Console\Abstracts\ModelGenerator;

class WarehouseModelGenerator extends ModelGenerator
{
    protected $name = 'socius:warehouse';
    protected $signature = 'socius:warehouse {name} {namespace?} {factory_namespace?}';

    protected $description = 'Create a new local copy of Warehouse model';

    protected function getStub(): string
    {
        return __DIR__ . '/../Stubs/WarehouseModel.stub';
    }
}
