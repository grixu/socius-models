<?php

namespace Grixu\SociusModels\Tests\Console;

use Grixu\SociusModels\Tests\Helpers\ModelGeneratorTestCase;

class CustomerModelGeneratorTest extends ModelGeneratorTestCase
{
    protected string $command = 'customer';
    protected string $commandParamName = 'MyCustomer';
    protected string $commandParamNamespace = 'My\\Models';
    protected string $commandParamFactoryNamespace = 'My\\Factories';

}
