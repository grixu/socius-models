<?php

namespace Grixu\SociusModels\Tests\Console;

use Grixu\SociusModels\Tests\Helpers\FactoryGeneratorTestCase;

class CustomerFactoryGeneratorTest extends FactoryGeneratorTestCase
{
    protected string $command = 'customer-factory';
    protected string $commandParamName = 'MyCustomer';
    protected string $commandParamNamespace = 'My\\Factories';
    protected string $commandParamFactoryNamespace = 'My\\Models';
}
