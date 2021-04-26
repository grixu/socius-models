<?php

namespace Grixu\SociusModels\Console\Commands;

use Grixu\SociusModels\Console\Abstracts\FactoryGenerator;

class BranchFactoryGenerator extends FactoryGenerator
{
    protected $name = 'socius:branch-factory';
    protected $signature = 'socius:branch-factory {model} {namespace?} {model_namespace?}';

    protected $description = 'Create a new local copy of Branch factory';

    protected function getStub(): string
    {
        return __DIR__ . '/../Stubs/BranchFactory.stub';
    }
}
