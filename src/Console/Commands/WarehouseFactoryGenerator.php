<?php

namespace Grixu\SociusModels\Console\Commands;

use Grixu\SociusModels\Console\Abstracts\FactoryGenerator;

class WarehouseFactoryGenerator extends FactoryGenerator
{
    protected $name = 'socius:warehouse-factory';
    protected $signature = 'socius:warehouse-factory {model} {namespace?} {model_namespace?}';

    protected $description = 'Create a new local copy of Warehouse factory';

    protected function getStub(): string
    {
        return __DIR__ . '/../Stubs/WarehouseFactory.stub';
    }
}
