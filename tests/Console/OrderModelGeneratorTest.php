<?php

namespace Grixu\SociusModels\Tests\Console;

use Grixu\SociusModels\Tests\Helpers\ModelGeneratorTestCase;

class OrderModelGeneratorTest extends ModelGeneratorTestCase
{
    protected string $command = 'order';
    protected string $commandParamName = 'MyOrder';
    protected string $commandParamNamespace = 'My\\Models';
    protected string $commandParamFactoryNamespace = 'My\\Factories';

}
