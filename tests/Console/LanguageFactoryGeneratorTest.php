<?php

namespace Grixu\SociusModels\Tests\Console;

use Grixu\SociusModels\Tests\Helpers\FactoryGeneratorTestCase;

class LanguageFactoryGeneratorTest extends FactoryGeneratorTestCase
{
    protected string $command = 'language-factory';
    protected string $commandParamName = 'MyLanguage';
    protected string $commandParamNamespace = 'My\\Factories';
    protected string $commandParamFactoryNamespace = 'My\\Models';
}
