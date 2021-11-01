<?php

namespace Grixu\SociusModels\Tests\Console;

use Grixu\SociusModels\Tests\Helpers\ModelGeneratorTestCase;

class OrderElementModelGeneratorTest extends ModelGeneratorTestCase
{
    protected string $command = 'order-element';
    protected string $commandParamName = 'MyOrderElement';
    protected string $commandParamNamespace = 'My\\Models';
    protected string $commandParamFactoryNamespace = 'My\\Factories';
}
