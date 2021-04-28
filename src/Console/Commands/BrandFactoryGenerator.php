<?php

namespace Grixu\SociusModels\Console\Commands;

use Grixu\SociusModels\Console\Abstracts\FactoryGenerator;

class BrandFactoryGenerator extends FactoryGenerator
{
    protected $name = 'socius:brand-factory';
    protected $signature = 'socius:brand-factory {model} {namespace?} {model_namespace?}';

    protected $description = 'Create a new local copy of Brand factory';

    protected function getStub(): string
    {
        return __DIR__ . '/../Stubs/BrandFactory.stub';
    }
}
