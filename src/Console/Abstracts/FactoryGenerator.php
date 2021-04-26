<?php

namespace Grixu\SociusModels\Console\Abstracts;

use Illuminate\Console\GeneratorCommand;
use Illuminate\Support\Str;
use Symfony\Component\Console\Input\InputArgument;

abstract class FactoryGenerator extends GeneratorCommand
{
    protected $type = 'Factory';

    protected function buildClass($name)
    {
        $factory = class_basename($name);

        $namespaceModel =  $this->qualifyModel($this->argument('model'));

        $model = class_basename($namespaceModel);

        if ($this->argument('namespace')) {
            $namespace = $this->argument('namespace');
        } else {
            $namespace = 'Database\\Factories';
        }

        $replace = [
            'DummyNamespace' => $namespace,
            'NamespacedDummyModel' => $namespaceModel,
            'DummyModelFactory' => $factory,
            'DummyModel' => $model,
        ];

        return str_replace(
            array_keys($replace), array_values($replace), parent::buildClass($name)
        );
    }

    protected function getPath($name): string
    {
        if ($this->argument('namespace')) {
            return $this->laravel['path'].'/../'.str_replace('\\', '/', $name).'.php';
        }

        $name = (string) Str::of($name)->replaceFirst('Database\Factories\\', '')->finish('Factory');

        return $this->laravel->databasePath().'/factories/'.str_replace('\\', '/', $name).'.php';
    }

    protected function qualifyClass($name): string
    {
        $name = ltrim($name, '\\/');

        $name = str_replace('/', '\\', $name);

        if ($this->argument('namespace')) {
            $namespace = Str::of($this->argument('namespace'))->finish('\\');
            return $namespace . $name;
        }

        return 'Database\Factories\\'.$name;
    }

    protected function qualifyModel($model): string
    {
        if ($this->argument('model_namespace')) {
            $namespace = $this->argument('model_namespace');

            $namespace = ltrim($namespace, '\\/');
            $namespace = str_replace('/', '\\', $namespace);

            return $namespace . '\\' . $model;
        }

        return parent::qualifyModel($model);
    }

    abstract protected function getStub(): string;

    protected function getNameInput(): string
    {
        return class_basename($this->qualifyModel($this->argument('model'))) . 'Factory';
    }

    /** @codeCoverageIgnore  */
    protected function getArguments(): array
    {
        return [
            ['model', InputArgument::REQUIRED, 'The name of the local model.'],
            ['namespace', InputArgument::OPTIONAL, 'The namespace of the local Factory.'],
            ['model_namespace', InputArgument::OPTIONAL, 'The namespace of the local Model.'],
        ];
    }

}
