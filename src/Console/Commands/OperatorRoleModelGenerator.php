<?php

namespace Grixu\SociusModels\Console\Commands;

use Grixu\SociusModels\Console\Abstracts\ModelGenerator;

class OperatorRoleModelGenerator extends ModelGenerator
{
    protected $name = 'socius:operator-role';
    protected $signature = 'socius:operator-role {name} {namespace?} {factory_namespace?}';

    protected $description = 'Create a new local copy of Operator Role model';

    protected function getStub(): string
    {
        return __DIR__ . '/../Stubs/OperatorRoleModel.stub';
    }
}
