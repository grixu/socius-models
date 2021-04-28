<?php

namespace Grixu\SociusModels\Console\Commands;

use Grixu\SociusModels\Console\Abstracts\ModelGenerator;

class OrderModelGenerator extends ModelGenerator
{
    protected $name = 'socius:order';
    protected $signature = 'socius:order {name} {namespace?} {factory_namespace?}';

    protected $description = 'Create a new local copy of Order model';

    protected function getStub(): string
    {
        return __DIR__ . '/../Stubs/OrderModel.stub';
    }
}
