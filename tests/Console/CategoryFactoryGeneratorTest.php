<?php

namespace Grixu\SociusModels\Tests\Console;

use Grixu\SociusModels\Tests\Helpers\FactoryGeneratorTestCase;

class CategoryFactoryGeneratorTest extends FactoryGeneratorTestCase
{
    protected string $command = 'category-factory';
    protected string $commandParamName = 'MyCategory';
    protected string $commandParamNamespace = 'My\\Factories';
    protected string $commandParamFactoryNamespace = 'My\\Models';
}
