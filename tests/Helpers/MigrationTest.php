<?php

namespace Grixu\SociusModels\Tests\Helpers;

use Grixu\SociusModels\SociusModelsServiceProvider;
use Illuminate\Support\Facades\Schema;
use Orchestra\Testbench\TestCase;

abstract class MigrationTest extends TestCase
{
    protected $obj;
    protected $table = 'customers';
    protected $checksum = true;

    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app): array
    {
        return [
            \Spatie\LaravelRay\RayServiceProvider::class,
            SociusModelsServiceProvider::class,
        ];
    }

    /** @test */
    public function up(): void
    {
        $this->obj->up();

        $this->assertTrue(Schema::hasTable($this->table));
    }

    /** @test */
    public function down(): void
    {
        $this->obj->up();
        $this->assertTrue(Schema::hasTable($this->table));

        $this->obj->down();

        $this->assertFalse(Schema::hasTable($this->table));
    }

    protected function emptyChecksumConfig($app): void
    {
        $app->config->set('socius-models.checksum_field', null);
    }

    /**
     * @test
     * @environment-setup emptyChecksumConfig
     */
    public function empty_checksum_config(): void
    {
        $this->up();

        if ($this->checksum) {
            // checksum is default name in config
            $this->assertFalse(Schema::hasColumn($this->table, 'checksum'));
        }

        // to hide warning about no assertions in test
        $this->assertTrue(true);
    }
}
