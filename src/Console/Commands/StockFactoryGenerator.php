<?php

namespace Grixu\SociusModels\Console\Commands;

use Grixu\SociusModels\Console\Abstracts\FactoryGenerator;

class StockFactoryGenerator extends FactoryGenerator
{
    protected $name = 'socius:stock-factory';
    protected $signature = 'socius:stock-factory {model} {namespace?} {model_namespace?}';

    protected $description = 'Create a new local copy of Stock factory';

    protected function getStub(): string
    {
        return __DIR__ . '/../Stubs/StockFactory.stub';
    }
}
