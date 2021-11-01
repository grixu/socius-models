<?php

namespace Grixu\SociusModels\Tests\Console;

use Grixu\SociusModels\Tests\Helpers\ModelGeneratorTestCase;

class BrandModelGeneratorTest extends ModelGeneratorTestCase
{
    protected string $command = 'brand';
    protected string $commandParamName = 'MyBrand';
    protected string $commandParamNamespace = 'My\\Models';
    protected string $commandParamFactoryNamespace = 'My\\Factories';
}
