<?php

namespace Grixu\SociusModels\Tests\Console;

use Grixu\SociusModels\Tests\Helpers\FactoryGeneratorTestCase;

class OperatorFactoryGeneratorTest extends FactoryGeneratorTestCase
{
    protected string $command = 'operator-factory';
    protected string $commandParamName = 'MyOperator';
    protected string $commandParamNamespace = 'My\\Factories';
    protected string $commandParamFactoryNamespace = 'My\\Models';
}
