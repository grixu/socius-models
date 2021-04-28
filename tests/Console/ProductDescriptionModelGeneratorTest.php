<?php

namespace Grixu\SociusModels\Tests\Console;

use Grixu\SociusModels\Tests\Helpers\ModelGeneratorTestCase;

class ProductDescriptionModelGeneratorTest extends ModelGeneratorTestCase
{
    protected string $command = 'product-description';
    protected string $commandParamName = 'MyProductDescription';
    protected string $commandParamNamespace = 'My\\Models';
    protected string $commandParamFactoryNamespace = 'My\\Factories';
}
