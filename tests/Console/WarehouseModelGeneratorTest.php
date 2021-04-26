<?php

namespace Grixu\SociusModels\Tests\Console;

use Grixu\SociusModels\Tests\Helpers\ModelGeneratorTestCase;

class WarehouseModelGeneratorTest extends ModelGeneratorTestCase
{
    protected string $command = 'warehouse';
    protected string $commandParamName = 'MyWarehouse';
    protected string $commandParamNamespace = 'My\\Models';
    protected string $commandParamFactoryNamespace = 'My\\Factories';

}
