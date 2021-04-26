<?php

namespace Grixu\SociusModels\Tests\Console;

use Grixu\SociusModels\Tests\Helpers\FactoryGeneratorTestCase;

class ProductFactoryGeneratorTest extends FactoryGeneratorTestCase
{
    protected string $command = 'product-factory';
    protected string $commandParamName = 'MyProduct';
    protected string $commandParamNamespace = 'My\\Factories';
    protected string $commandParamFactoryNamespace = 'My\\Models';
}
