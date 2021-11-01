<?php

namespace Grixu\SociusModels\Tests\Helpers;

use Grixu\SociusModels\SociusModelsServiceProvider;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use Orchestra\Testbench\TestCase;

class ModelGeneratorTestCase extends TestCase
{
    protected string $command = 'branch';
    protected string $commandParamName = 'MyBranch';
    protected string $commandParamNamespace = 'My\\Models';
    protected string $commandParamFactoryNamespace = 'My\\Factories';
    protected string $filePath;

    protected function getPackageProviders($app): array
    {
        return [
            \Spatie\LaravelRay\RayServiceProvider::class,
            SociusModelsServiceProvider::class,
        ];
    }

    protected function setUp(): void
    {
        parent::setUp();
    }

    /** @test */
    public function it_generates_model()
    {
        $this->filePath = app_path('Models/' . $this->commandParamName . '.php');

        if (File::exists($this->filePath)) {
            unlink($this->filePath);
        }

        $this->assertFalse(File::exists($this->filePath));

        Artisan::call('socius:' . $this->command, ['name' => $this->commandParamName]);

        $this->assertTrue(File::exists($this->filePath));
    }

    /** @test */
    public function it_generates_model_in_custom_namespace()
    {
        $this->filePath = app_path(
            '../' . str_replace('\\', '/', $this->commandParamNamespace) . '/' . $this->commandParamName . '.php'
        );

        if (File::exists($this->filePath)) {
            unlink($this->filePath);
        }

        $this->assertFalse(File::exists($this->filePath));

        Artisan::call(
            'socius:' . $this->command,
            ['name' => $this->commandParamName, 'namespace' => $this->commandParamNamespace]
        );

        $this->assertTrue(File::exists($this->filePath));
    }

    /** @test */
    public function it_use_custom_factory_namespace()
    {
        $this->filePath = app_path(
            '../' . str_replace('\\', '/', $this->commandParamNamespace) . '/' . $this->commandParamName . '.php'
        );

        if (File::exists($this->filePath)) {
            unlink($this->filePath);
        }

        $this->assertFalse(File::exists($this->filePath));

        Artisan::call(
            'socius:' . $this->command,
            [
                'name' => $this->commandParamName,
                'namespace' => $this->commandParamNamespace,
                'factory_namespace' => $this->commandParamFactoryNamespace,
            ]
        );

        $this->assertTrue(File::exists($this->filePath));
        $this->assertStringContainsString($this->commandParamFactoryNamespace, File::get($this->filePath));
    }
}
