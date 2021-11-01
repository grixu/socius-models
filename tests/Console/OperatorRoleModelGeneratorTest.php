<?php

namespace Grixu\SociusModels\Tests\Console;

use Grixu\SociusModels\Tests\Helpers\ModelGeneratorTestCase;

class OperatorRoleModelGeneratorTest extends ModelGeneratorTestCase
{
    protected string $command = 'operator-role';
    protected string $commandParamName = 'MyOperatorRole';
    protected string $commandParamNamespace = 'My\\Models';
    protected string $commandParamFactoryNamespace = 'My\\Factories';
}
