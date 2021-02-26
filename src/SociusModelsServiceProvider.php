<?php

namespace Grixu\SociusModels;

use Illuminate\Support\ServiceProvider;

class SociusModelsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes(
                [
                    __DIR__ . '/../config/config.php' => config_path('socius-models.php'),
                ],
                'config'
            );

            $this->publishes(
                [
                    __DIR__ . '/../migrations/product' => database_path('migrations'),
                    __DIR__ . '/../migrations/description' => database_path('migrations'),
                    __DIR__ . '/../migrations/operator' => database_path('migrations'),
                    __DIR__ . '/../migrations/customer' => database_path('migrations'),
                    __DIR__ . '/../migrations/warehouse' => database_path('migrations'),
                    __DIR__ . '/../migrations/order' => database_path('migrations'),
                ],
                'socius-migrations'
            );

            $this->publishes(
                [
                    __DIR__ . '/../migrations/product' => database_path('migrations'),
                ],
                'socius-migrations-product'
            );

            $this->publishes(
                [
                    __DIR__ . '/../migrations/description' => database_path('migrations'),
                ],
                'socius-migrations-description'
            );

            $this->publishes(
                [
                    __DIR__ . '/../migrations/operator' => database_path('migrations'),
                ],
                'socius-migrations-operator'
            );

            $this->publishes(
                [
                    __DIR__ . '/../migrations/customer' => database_path('migrations'),
                ],
                'socius-migrations-customer'
            );

            $this->publishes(
                [
                    __DIR__ . '/../migrations/warehouse' => database_path('migrations'),
                ],
                'socius-migrations-warehouse'
            );

            $this->publishes(
                [
                    __DIR__ . '/../migrations/order' => database_path('migrations'),
                ],
                'socius-migrations-order',
            );
        }
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'socius-models');
    }
}
