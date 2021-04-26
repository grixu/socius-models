<?php

namespace Grixu\SociusModels\Tests\Console;

use Grixu\SociusModels\Tests\Helpers\ModelGeneratorTestCase;

class StockModelGeneratorTest extends ModelGeneratorTestCase
{
    protected string $command = 'stock';
    protected string $commandParamName = 'MyStock';
    protected string $commandParamNamespace = 'My\\Models';
    protected string $commandParamFactoryNamespace = 'My\\Factories';

}
