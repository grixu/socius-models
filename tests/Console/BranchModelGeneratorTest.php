<?php

namespace Grixu\SociusModels\Tests\Console;

use Grixu\SociusModels\Tests\Helpers\ModelGeneratorTestCase;

class BranchModelGeneratorTest extends ModelGeneratorTestCase
{
    protected string $command = 'branch';
    protected string $commandParamName = 'MyBranch';
    protected string $commandParamNamespace = 'My\\Models';
    protected string $commandParamFactoryNamespace = 'My\\Factories';

}
