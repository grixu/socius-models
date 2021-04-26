<?php

namespace Grixu\SociusModels\Console\Commands;

use Grixu\SociusModels\Console\Abstracts\ModelGenerator;

class BranchModelGenerator extends ModelGenerator
{
    protected $name = 'socius:branch';
    protected $signature = 'socius:branch {name} {namespace?} {factory_namespace?}';

    protected $description = 'Create a new local copy of Branch model';

    protected function getStub(): string
    {
        return __DIR__ . '/../Stubs/BranchModel.stub';
    }
}
