<?php

namespace Grixu\SociusModels\Tests\Console;

use Grixu\SociusModels\Tests\Helpers\FactoryGeneratorTestCase;

class BranchFactoryGeneratorTest extends FactoryGeneratorTestCase
{
    protected string $command = 'branch-factory';
    protected string $commandParamName = 'MyBranch';
    protected string $commandParamNamespace = 'My\\Factories';
    protected string $commandParamFactoryNamespace = 'My\\Models';
}
