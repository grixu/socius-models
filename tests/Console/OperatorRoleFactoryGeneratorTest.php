<?php

namespace Grixu\SociusModels\Tests\Console;

use Grixu\SociusModels\Tests\Helpers\FactoryGeneratorTestCase;

class OperatorRoleFactoryGeneratorTest extends FactoryGeneratorTestCase
{
    protected string $command = 'operator-role-factory';
    protected string $commandParamName = 'MyOperatorRole';
    protected string $commandParamNamespace = 'My\\Factories';
    protected string $commandParamFactoryNamespace = 'My\\Models';
}
