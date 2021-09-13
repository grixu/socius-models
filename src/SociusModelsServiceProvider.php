<?php

namespace Grixu\SociusModels;

use Grixu\SociusModels\Console\Commands\BranchFactoryGenerator;
use Grixu\SociusModels\Console\Commands\BranchModelGenerator;
use Grixu\SociusModels\Console\Commands\BrandFactoryGenerator;
use Grixu\SociusModels\Console\Commands\BrandModelGenerator;
use Grixu\SociusModels\Console\Commands\CategoryFactoryGenerator;
use Grixu\SociusModels\Console\Commands\CategoryModelGenerator;
use Grixu\SociusModels\Console\Commands\CustomerFactoryGenerator;
use Grixu\SociusModels\Console\Commands\CustomerModelGenerator;
use Grixu\SociusModels\Console\Commands\LanguageFactoryGenerator;
use Grixu\SociusModels\Console\Commands\LanguageModelGenerator;
use Grixu\SociusModels\Console\Commands\OperatorFactoryGenerator;
use Grixu\SociusModels\Console\Commands\OperatorModelGenerator;
use Grixu\SociusModels\Console\Commands\OperatorRoleFactoryGenerator;
use Grixu\SociusModels\Console\Commands\OperatorRoleModelGenerator;
use Grixu\SociusModels\Console\Commands\OrderElementFactoryGenerator;
use Grixu\SociusModels\Console\Commands\OrderElementModelGenerator;
use Grixu\SociusModels\Console\Commands\OrderFactoryGenerator;
use Grixu\SociusModels\Console\Commands\OrderModelGenerator;
use Grixu\SociusModels\Console\Commands\ProductDescriptionFactoryGenerator;
use Grixu\SociusModels\Console\Commands\ProductDescriptionModelGenerator;
use Grixu\SociusModels\Console\Commands\ProductFactoryGenerator;
use Grixu\SociusModels\Console\Commands\ProductModelGenerator;
use Grixu\SociusModels\Console\Commands\ProductTypeFactoryGenerator;
use Grixu\SociusModels\Console\Commands\ProductTypeModelGenerator;
use Grixu\SociusModels\Console\Commands\StockFactoryGenerator;
use Grixu\SociusModels\Console\Commands\StockModelGenerator;
use Grixu\SociusModels\Console\Commands\WarehouseFactoryGenerator;
use Grixu\SociusModels\Console\Commands\WarehouseModelGenerator;
use Illuminate\Support\ServiceProvider;

class SociusModelsServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes(
                [
                    __DIR__ . '/../config/config.php' => config_path('socius-models.php'),
                ],
                'socius-models-config'
            );

            $this->commands(
                [
                    BranchModelGenerator::class,
                    BranchFactoryGenerator::class,
                    OperatorRoleModelGenerator::class,
                    OperatorRoleFactoryGenerator::class,
                    OperatorModelGenerator::class,
                    OperatorFactoryGenerator::class,
                    CategoryModelGenerator::class,
                    CategoryFactoryGenerator::class,
                    ProductTypeModelGenerator::class,
                    ProductTypeFactoryGenerator::class,
                    BrandModelGenerator::class,
                    BrandFactoryGenerator::class,
                    ProductModelGenerator::class,
                    ProductFactoryGenerator::class,
                    CustomerModelGenerator::class,
                    CustomerFactoryGenerator::class,
                    LanguageModelGenerator::class,
                    LanguageFactoryGenerator::class,
                    ProductDescriptionModelGenerator::class,
                    ProductDescriptionFactoryGenerator::class,
                    OrderModelGenerator::class,
                    OrderFactoryGenerator::class,
                    OrderElementModelGenerator::class,
                    OrderElementFactoryGenerator::class,
                    WarehouseModelGenerator::class,
                    WarehouseFactoryGenerator::class,
                    StockModelGenerator::class,
                    StockFactoryGenerator::class,
                ]
            );

            $this->publishes(
                [
                    __DIR__ . '/../migrations/create_branches_table.stub' => database_path(
                        'migrations/' . date('Y_m_d_His', time()) . '_create_branches_table.php'
                    ),
                    __DIR__ . '/../migrations/create_operator_roles_table.stub' => database_path(
                        'migrations/' . date('Y_m_d_His', time()) . '_create_operator_roles_table.php'
                    ),
                    __DIR__ . '/../migrations/create_operators_table.stub' => database_path(
                        'migrations/' . date('Y_m_d_His', time()) . '_create_operators_table.php'
                    ),
                    __DIR__ . '/../migrations/create_categories_table.stub' => database_path(
                        'migrations/' . date('Y_m_d_His', time()) . '_create_categories_table.php'
                    ),
                    __DIR__ . '/../migrations/create_brands_table.stub' => database_path(
                        'migrations/' . date('Y_m_d_His', time()) . '_create_brands_table.php'
                    ),
                    __DIR__ . '/../migrations/create_product_types_table.stub' => database_path(
                        'migrations/' . date('Y_m_d_His', time()) . '_create_product_types_table.php'
                    ),
                    __DIR__ . '/../migrations/create_products_table.stub' => database_path(
                        'migrations/' . date('Y_m_d_His', time()) . '_create_products_table.php'
                    ),
                    __DIR__ . '/../migrations/create_customers_table.stub' => database_path(
                        'migrations/' . date('Y_m_d_His', time()) . '_create_customers_table.php'
                    ),
                    __DIR__ . '/../migrations/create_languages_table.stub' => database_path(
                        'migrations/' . date('Y_m_d_His', time()) . '_create_languages_table.php'
                    ),
                    __DIR__ . '/../migrations/create_warehouse_table.stub' => database_path(
                        'migrations/' . date('Y_m_d_His', time()) . '_create_warehouse_table.php'
                    ),
                    __DIR__ . '/../migrations/create_product_descriptions_table.stub' => database_path(
                        'migrations/' . date('Y_m_d_His', time() + 1) . '_create_product_descriptions_table.php'
                    ),
                    __DIR__ . '/../migrations/create_stocks_table.stub' => database_path(
                        'migrations/' . date('Y_m_d_His', time() + 1) . '_create_stocks_table.php'
                    ),
                    __DIR__ . '/../migrations/create_operator_branch_pivot_table.stub' => database_path(
                        'migrations/' . date('Y_m_d_His', time() + 2) . '_create_operator_branch_pivot_table.php'
                    ),
                    __DIR__ . '/../migrations/create_orders_table.stub' => database_path(
                        'migrations/' . date('Y_m_d_His', time() + 2) . '_create_orders_table.php'
                    ),
                    __DIR__ . '/../migrations/create_order_elements_table.stub' => database_path(
                        'migrations/' . date('Y_m_d_His', time() + 3) . '_create_order_elements_table.php'
                    ),
                    __DIR__ . '/../migrations/update_products_table_add_availabilities.stub' => database_path(
                        'migrations/' . date('Y_m_d_His', time() + 3) . '_update_products_table_add_availabilities.php'
                    ),
                ],
                'socius-migrations'
            );

            $this->publishBranchMigration();
            $this->publishOperatorRoleMigration();
            $this->publishOperatorMigration();
            $this->publishOperatorBranchesMigration();
            $this->publishCategoryMigration();
            $this->publishBrandMigration();
            $this->publishProductTypeMigration();
            $this->publishProductMigration();
            $this->publishCustomerMigration();
            $this->publishOrderMigration();
            $this->publishOrderElementMigration();
            $this->publishLanguageMigration();
            $this->publishProductDescriptionMigration();
            $this->publishWarehouseMigration();
            $this->publishStockMigration();
        }
    }

    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'socius-models');
    }

    protected function publishBranchMigration(): void
    {
        $this->publishes(
            [
                __DIR__ . '/../migrations/create_branches_table.stub' => database_path(
                    'migrations/' . date('Y_m_d_His', time()) . '_create_branches_table.php'
                ),
            ],
            'socius-migrations-branch'
        );
    }

    protected function publishOperatorRoleMigration(): void
    {
        $this->publishes(
            [
                __DIR__ . '/../migrations/create_operator_roles_table.stub' => database_path(
                    'migrations/' . date('Y_m_d_His', time()) . '_create_operator_roles_table.php'
                ),
            ],
            'socius-migrations-operator-role'
        );
    }

    protected function publishOperatorMigration(): void
    {
        $this->publishes(
            [
                __DIR__ . '/../migrations/create_operators_table.stub' => database_path(
                    'migrations/' . date('Y_m_d_His', time()) . '_create_operators_table.php'
                ),
            ],
            'socius-migrations-operator'
        );
    }

    protected function publishOperatorBranchesMigration(): void
    {
        $this->publishes(
            [
                __DIR__ . '/../migrations/create_operator_branch_pivot_table.stub' => database_path(
                    'migrations/' . date('Y_m_d_His', time()) . '_create_operator_branch_pivot_table.php'
                ),
            ],
            'socius-migrations-operator-branches'
        );
    }

    protected function publishCategoryMigration(): void
    {
        $this->publishes(
            [
                __DIR__ . '/../migrations/create_categories_table.stub' => database_path(
                    'migrations/' . date('Y_m_d_His', time()) . '_create_categories_table.php'
                ),
            ],
            'socius-migrations-category'
        );
    }

    protected function publishBrandMigration(): void
    {
        $this->publishes(
            [
                __DIR__ . '/../migrations/create_brands_table.stub' => database_path(
                    'migrations/' . date('Y_m_d_His', time()) . '_create_brands_table.php'
                ),
            ],
            'socius-migrations-brand'
        );
    }

    protected function publishProductTypeMigration(): void
    {
        $this->publishes(
            [
                __DIR__ . '/../migrations/create_product_types_table.stub' => database_path(
                    'migrations/' . date('Y_m_d_His', time()) . '_create_product_types_table.php'
                ),
            ],
            'socius-migrations-product-type'
        );
    }

    protected function publishProductMigration(): void
    {
        $this->publishes(
            [
                __DIR__ . '/../migrations/create_products_table.stub' => database_path(
                    'migrations/' . date('Y_m_d_His', time()) . '_create_products_table.php'
                ),
                __DIR__ . '/../migrations/update_products_table_add_availabilities.stub' => database_path(
                    'migrations/' . date('Y_m_d_His', time()) . '_update_products_table_add_availabilities.php'
                ),
            ],
            'socius-migrations-product'
        );
    }

    protected function publishCustomerMigration(): void
    {
        $this->publishes(
            [
                __DIR__ . '/../migrations/create_customers_table.stub' => database_path(
                    'migrations/' . date('Y_m_d_His', time()) . '_create_customers_table.php'
                ),
            ],
            'socius-migrations-customer'
        );
    }

    protected function publishOrderMigration(): void
    {
        $this->publishes(
            [
                __DIR__ . '/../migrations/create_orders_table.stub' => database_path(
                    'migrations/' . date('Y_m_d_His', time()) . '_create_orders_table.php'
                ),
            ],
            'socius-migrations-order'
        );
    }

    protected function publishOrderElementMigration(): void
    {
        $this->publishes(
            [
                __DIR__ . '/../migrations/create_order_elements_table.stub' => database_path(
                    'migrations/' . date('Y_m_d_His', time()) . '_create_order_elements_table.php'
                ),
            ],
            'socius-migrations-order-element'
        );
    }

    protected function publishLanguageMigration(): void
    {
        $this->publishes(
            [
                __DIR__ . '/../migrations/create_languages_table.stub' => database_path(
                    'migrations/' . date('Y_m_d_His', time()) . '_create_languages_table.php'
                ),
            ],
            'socius-migrations-language'
        );
    }

    protected function publishProductDescriptionMigration(): void
    {
        $this->publishes(
            [
                __DIR__ . '/../migrations/create_product_descriptions_table.stub' => database_path(
                    'migrations/' . date('Y_m_d_His', time()) . '_create_product_descriptions_table.php'
                ),
            ],
            'socius-migrations-product-description'
        );
    }

    protected function publishWarehouseMigration(): void
    {
        $this->publishes(
            [
                __DIR__ . '/../migrations/create_warehouse_table.stub' => database_path(
                    'migrations/' . date('Y_m_d_His', time()) . '_create_warehouse_table.php'
                ),
            ],
            'socius-migrations-warehouse'
        );
    }

    protected function publishStockMigration(): void
    {
        $this->publishes(
            [
                __DIR__ . '/../migrations/create_stocks_table.stub' => database_path(
                    'migrations/' . date('Y_m_d_His', time()) . '_create_stocks_table.php'
                ),
            ],
            'socius-migrations-stock'
        );
    }
}
