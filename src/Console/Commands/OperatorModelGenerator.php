<?php

namespace Grixu\SociusModels\Console\Commands;

use Grixu\SociusModels\Console\Abstracts\ModelGenerator;

class OperatorModelGenerator extends ModelGenerator
{
    protected $name = 'socius:operator';
    protected $signature = 'socius:operator {name} {namespace?} {factory_namespace?}';

    protected $description = 'Create a new local copy of Operator model';

    protected function getStub(): string
    {
        return __DIR__ . '/../Stubs/OperatorModel.stub';
    }
}
