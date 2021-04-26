<?php

namespace Grixu\SociusModels\Tests\Console;

use Grixu\SociusModels\Tests\Helpers\FactoryGeneratorTestCase;

class OrderElementFactoryGeneratorTest extends FactoryGeneratorTestCase
{
    protected string $command = 'order-element-factory';
    protected string $commandParamName = 'MyOrderElement';
    protected string $commandParamNamespace = 'My\\Factories';
    protected string $commandParamFactoryNamespace = 'My\\Models';
}
