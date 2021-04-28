<?php

namespace Grixu\SociusModels\Console\Commands;

use Grixu\SociusModels\Console\Abstracts\FactoryGenerator;

class OrderElementFactoryGenerator extends FactoryGenerator
{
    protected $name = 'socius:order-element-factory';
    protected $signature = 'socius:order-element-factory {model} {namespace?} {model_namespace?}';

    protected $description = 'Create a new local copy of Order Element factory';

    protected function getStub(): string
    {
        return __DIR__ . '/../Stubs/OrderElementFactory.stub';
    }
}
