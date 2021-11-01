<?php

namespace Grixu\SociusModels\Tests\Console;

use Grixu\SociusModels\Tests\Helpers\ModelGeneratorTestCase;

class LanguageModelGeneratorTest extends ModelGeneratorTestCase
{
    protected string $command = 'language';
    protected string $commandParamName = 'MyLanguage';
    protected string $commandParamNamespace = 'My\\Models';
    protected string $commandParamFactoryNamespace = 'My\\Factories';
}
