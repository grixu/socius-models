<?php

namespace Grixu\SociusModels\Tests\Console;

use Grixu\SociusModels\Tests\Helpers\FactoryGeneratorTestCase;

class OrderFactoryGeneratorTest extends FactoryGeneratorTestCase
{
    protected string $command = 'order-factory';
    protected string $commandParamName = 'MyOrder';
    protected string $commandParamNamespace = 'My\\Factories';
    protected string $commandParamFactoryNamespace = 'My\\Models';
}
