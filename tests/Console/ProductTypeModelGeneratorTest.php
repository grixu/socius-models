<?php

namespace Grixu\SociusModels\Tests\Console;

use Grixu\SociusModels\Tests\Helpers\ModelGeneratorTestCase;

class ProductTypeModelGeneratorTest extends ModelGeneratorTestCase
{
    protected string $command = 'product-type';
    protected string $commandParamName = 'MyProductType';
    protected string $commandParamNamespace = 'My\\Models';
    protected string $commandParamFactoryNamespace = 'My\\Factories';
}
