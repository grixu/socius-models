<?php

namespace Grixu\SociusModels\Console\Commands;

use Grixu\SociusModels\Console\Abstracts\FactoryGenerator;

class OperatorRoleFactoryGenerator extends FactoryGenerator
{
    protected $name = 'socius:operator-role-factory';
    protected $signature = 'socius:operator-role-factory {model} {namespace?} {model_namespace?}';

    protected $description = 'Create a new local copy of Operator Role factory';

    protected function getStub(): string
    {
        return __DIR__ . '/../Stubs/OperatorRoleFactory.stub';
    }
}
