<?php

namespace Grixu\SociusModels\Tests\Helpers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Orchestra\Testbench\TestCase;

abstract class ModelTestCase extends TestCase
{
    use RefreshDatabase;

    protected string $model;
    protected string $factory;
    protected string $table;

    protected function getPackageProviders($app): array
    {
        return [
            \Spatie\LaravelRay\RayServiceProvider::class,
        ];
    }

    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function migrateCustomer(): void
    {
        require_once __DIR__ . '/../../migrations/create_customers_table.php.stub';
        (new \CreateCustomersTable())->up();
    }

    protected function migrateDescription(): void
    {
        require_once __DIR__ . '/../../migrations/create_languages_table.php.stub';
        (new \CreateLanguagesTable())->up();

        require_once __DIR__ . '/../../migrations/create_product_descriptions_table.php.stub';
        (new \CreateProductDescriptionsTable())->up();
    }

    protected function migrateProduct(): void
    {
        require_once __DIR__ . '/../../migrations/create_brands_table.php.stub';
        (new \CreateBrandsTable())->up();

        require_once __DIR__ . '/../../migrations/create_product_types_table.php.stub';
        (new \CreateProductTypesTable())->up();

        require_once __DIR__ . '/../../migrations/create_categories_table.php.stub';
        (new \CreateCategoriesTable())->up();

        require_once __DIR__ . '/../../migrations/create_products_table.php.stub';
        (new \CreateProductsTable())->up();
    }

    protected function migrateOperator(): void
    {
        require_once __DIR__ . '/../../migrations/create_branches_table.php.stub';
        (new \CreateBranchesTable())->up();

        require_once __DIR__ . '/../../migrations/create_operator_roles_table.php.stub';
        (new \CreateOperatorRolesTable())->up();

        require_once __DIR__ . '/../../migrations/create_operators_table.php.stub';
        (new \CreateOperatorsTable())->up();

        require_once __DIR__ . '/../../migrations/create_operator_branch_pivot_table.php.stub';
        (new \CreateOperatorBranchPivotTable())->up();
    }

    protected function migrateWarehouse(): void
    {
        require_once __DIR__ . '/../../migrations/create_warehouse_table.php.stub';
        (new \CreateWarehouseTable())->up();

        require_once __DIR__ . '/../../migrations/create_stocks_table.php.stub';
        (new \CreateStocksTable())->up();
    }

    protected function migrateOrder(): void
    {
        require_once __DIR__ . '/../../migrations/create_orders_table.php.stub';
        (new \CreateOrdersTable())->up();

        require_once __DIR__ . '/../../migrations/create_order_elements_table.php.stub';
        (new \CreateOrderElementsTable())->up();
    }

    public function migrateAll(): void
    {
        $this->migrateProduct();
        $this->migrateOperator();
        $this->migrateCustomer();
        $this->migrateDescription();
        $this->migrateWarehouse();
        $this->migrateOrder();
    }

    /** @test */
    public function check_factory(): void
    {
        $factory = $this->model::factory();
        $this->assertEquals($this->factory, get_class($factory));
    }

    /** @test */
    public function check_model_factoring(): void
    {
        $this->migrateAll();
        $this->assertDatabaseCount($this->table, 0);
        $model = $this->model::factory()->create();

        $this->assertEquals($this->model, get_class($model));
        $this->assertDatabaseCount($this->table, 1);
    }
}
