<?php

namespace Grixu\SociusModels\Tests\Console;

use Grixu\SociusModels\Tests\Helpers\FactoryGeneratorTestCase;

class ProductDescriptionFactoryGeneratorTest extends FactoryGeneratorTestCase
{
    protected string $command = 'product-description-factory';
    protected string $commandParamName = 'MyProductDescription';
    protected string $commandParamNamespace = 'My\\Factories';
    protected string $commandParamFactoryNamespace = 'My\\Models';
}
