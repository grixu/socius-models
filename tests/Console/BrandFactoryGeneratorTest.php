<?php

namespace Grixu\SociusModels\Tests\Console;

use Grixu\SociusModels\Tests\Helpers\FactoryGeneratorTestCase;

class BrandFactoryGeneratorTest extends FactoryGeneratorTestCase
{
    protected string $command = 'brand-factory';
    protected string $commandParamName = 'MyBrand';
    protected string $commandParamNamespace = 'My\\Factories';
    protected string $commandParamFactoryNamespace = 'My\\Models';
}
