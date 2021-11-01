<?php

namespace Grixu\SociusModels\Tests\Console;

use Grixu\SociusModels\Tests\Helpers\ModelGeneratorTestCase;

class ProductModelGeneratorTest extends ModelGeneratorTestCase
{
    protected string $command = 'product';
    protected string $commandParamName = 'MyProduct';
    protected string $commandParamNamespace = 'My\\Models';
    protected string $commandParamFactoryNamespace = 'My\\Factories';
}
