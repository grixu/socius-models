<?php

namespace Grixu\SociusModels\Console\Commands;

use Grixu\SociusModels\Console\Abstracts\FactoryGenerator;

class OrderFactoryGenerator extends FactoryGenerator
{
    protected $name = 'socius:order-factory';
    protected $signature = 'socius:order-factory {model} {namespace?} {model_namespace?}';

    protected $description = 'Create a new local copy of Order factory';

    protected function getStub(): string
    {
        return __DIR__ . '/../Stubs/OrderFactory.stub';
    }
}
