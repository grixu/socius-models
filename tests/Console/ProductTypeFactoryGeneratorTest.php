<?php

namespace Grixu\SociusModels\Tests\Console;

use Grixu\SociusModels\Tests\Helpers\FactoryGeneratorTestCase;

class ProductTypeFactoryGeneratorTest extends FactoryGeneratorTestCase
{
    protected string $command = 'product-type-factory';
    protected string $commandParamName = 'MyProductType';
    protected string $commandParamNamespace = 'My\\Factories';
    protected string $commandParamFactoryNamespace = 'My\\Models';
}
