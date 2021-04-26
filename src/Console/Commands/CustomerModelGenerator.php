<?php

namespace Grixu\SociusModels\Console\Commands;

use Grixu\SociusModels\Console\Abstracts\ModelGenerator;

class CustomerModelGenerator extends ModelGenerator
{
    protected $name = 'socius:customer';
    protected $signature = 'socius:customer {name} {namespace?} {factory_namespace?}';

    protected $description = 'Create a new local copy of Customer model';

    protected function getStub(): string
    {
        return __DIR__ . '/../Stubs/CustomerModel.php.stub';
    }
}
