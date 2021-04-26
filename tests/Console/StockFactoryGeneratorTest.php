<?php

namespace Grixu\SociusModels\Tests\Console;

use Grixu\SociusModels\Tests\Helpers\FactoryGeneratorTestCase;

class StockFactoryGeneratorTest extends FactoryGeneratorTestCase
{
    protected string $command = 'stock-factory';
    protected string $commandParamName = 'MyStock';
    protected string $commandParamNamespace = 'My\\Factories';
    protected string $commandParamFactoryNamespace = 'My\\Models';
}
