<?php

namespace Grixu\SociusModels\Tests\Console;

use Grixu\SociusModels\Tests\Helpers\ModelGeneratorTestCase;

class OperatorModelGeneratorTest extends ModelGeneratorTestCase
{
    protected string $command = 'operator';
    protected string $commandParamName = 'MyOperator';
    protected string $commandParamNamespace = 'My\\Models';
    protected string $commandParamFactoryNamespace = 'My\\Factories';
}
