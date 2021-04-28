<?php

namespace Grixu\SociusModels\Console\Abstracts;

use Illuminate\Console\GeneratorCommand;
use Illuminate\Support\Str;
use Symfony\Component\Console\Input\InputArgument;

abstract class ModelGenerator extends GeneratorCommand
{
    protected $type = 'Socius Local Model';

    protected function replaceClass($stub, $name)
    {
        $stub = parent::replaceClass($stub, $name);

        $factoryNamespace = $this->argument('factory_namespace') ?? 'Database\Factories';
        $stub = str_replace('DummyFactoryNamespace', $factoryNamespace, $stub);

        return str_replace('DummyModel', $this->argument('name'), $stub);
    }

    abstract protected function getStub(): string;

    protected function getDefaultNamespace($rootNamespace): string
    {
        return $this->argument('namespace') ?? $rootNamespace . '\Models';
    }

    protected function getPath($name): string
    {
        if ($this->argument('namespace')) {
            return $this->laravel['path'].'/../'.str_replace('\\', '/', $name).'.php';
        }

        return parent::getPath($name);
    }

    protected function qualifyClass($name): string
    {
        $name = ltrim($name, '\\/');

        $name = str_replace('/', '\\', $name);

        if ($this->argument('namespace')) {
            $namespace = Str::of($this->argument('namespace'))->finish('\\');
            return $namespace . $name;
        }

        return $this->getDefaultNamespace($this->rootNamespace()). '\\' .$name;
    }

    /** @codeCoverageIgnore  */
    protected function getArguments(): array
    {
        return [
            ['name', InputArgument::REQUIRED, 'The name of the local model.'],
            ['namespace', InputArgument::OPTIONAL, 'The namespace of the local model.'],
            ['factory_namespace', InputArgument::OPTIONAL, 'The namespace of the local model Factory.'],
        ];
    }

}
