<?php

namespace Grixu\SociusModels\Console\Commands;

use Grixu\SociusModels\Console\Abstracts\FactoryGenerator;

class OperatorFactoryGenerator extends FactoryGenerator
{
    protected $name = 'socius:operator-factory';
    protected $signature = 'socius:operator-factory {model} {namespace?} {model_namespace?}';

    protected $description = 'Create a new local copy of Operator factory';

    protected function getStub(): string
    {
        return __DIR__ . '/../Stubs/OperatorFactory.stub';
    }
}
