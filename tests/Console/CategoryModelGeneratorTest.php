<?php

namespace Grixu\SociusModels\Tests\Console;

use Grixu\SociusModels\Tests\Helpers\ModelGeneratorTestCase;

class CategoryModelGeneratorTest extends ModelGeneratorTestCase
{
    protected string $command = 'category';
    protected string $commandParamName = 'MyCategory';
    protected string $commandParamNamespace = 'My\\Models';
    protected string $commandParamFactoryNamespace = 'My\\Factories';

}
