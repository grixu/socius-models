<?php

namespace Grixu\SociusModels\Console\Commands;

use Grixu\SociusModels\Console\Abstracts\FactoryGenerator;

class CustomerFactoryGenerator extends FactoryGenerator
{
    protected $name = 'socius:customer-factory';
    protected $signature = 'socius:customer-factory {model} {namespace?} {model_namespace?}';

    protected $description = 'Create a new local copy of Customer factory';

    protected function getStub(): string
    {
        return __DIR__ . '/../Stubs/CustomerFactory.stub';
    }
}
