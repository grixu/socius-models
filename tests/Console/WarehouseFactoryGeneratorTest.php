<?php

namespace Grixu\SociusModels\Tests\Console;

use Grixu\SociusModels\Tests\Helpers\FactoryGeneratorTestCase;

class WarehouseFactoryGeneratorTest extends FactoryGeneratorTestCase
{
    protected string $command = 'warehouse-factory';
    protected string $commandParamName = 'MyWarehouse';
    protected string $commandParamNamespace = 'My\\Factories';
    protected string $commandParamFactoryNamespace = 'My\\Models';
}
