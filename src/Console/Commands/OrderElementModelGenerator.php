<?php

namespace Grixu\SociusModels\Console\Commands;

use Grixu\SociusModels\Console\Abstracts\ModelGenerator;

class OrderElementModelGenerator extends ModelGenerator
{
    protected $name = 'socius:order-element';
    protected $signature = 'socius:order-element {name} {namespace?} {factory_namespace?}';

    protected $description = 'Create a new local copy of Order Element model';

    protected function getStub(): string
    {
        return __DIR__ . '/../Stubs/OrderElementModel.stub';
    }
}
