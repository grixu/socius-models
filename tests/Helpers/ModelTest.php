<?php

namespace Grixu\SociusModels\Tests\Helpers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Orchestra\Testbench\TestCase;

abstract class ModelTest extends TestCase
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
        require_once __DIR__.'/../../migrations/customer/2020_09_30_102037_create_customers_table.php';
        (new \CreateCustomersTable())->up();
    }

    protected function migrateDescription(): void
    {
        require_once __DIR__.'/../../migrations/description/2020_10_05_085814_create_languages_table.php';
        (new \CreateLanguagesTable())->up();

        require_once __DIR__.'/../../migrations/description/2020_10_05_100104_create_product_descriptions_table.php';
        (new \CreateProductDescriptionsTable())->up();
    }

    protected function migrateProduct(): void
    {
        require_once __DIR__.'/../../migrations/product/2020_09_25_081701_create_brands_table.php';
        (new \CreateBrandsTable())->up();

        require_once __DIR__.'/../../migrations/product/2020_09_25_081724_create_product_types_table.php';
        (new \CreateProductTypesTable())->up();

        require_once __DIR__.'/../../migrations/product/2020_09_25_081713_create_categories_table.php';
        (new \CreateCategoriesTable())->up();

        require_once __DIR__.'/../../migrations/product/2020_09_25_081823_create_products_table.php';
        (new \CreateProductsTable())->up();
    }

    protected function migrateOperator(): void
    {
        require_once __DIR__.'/../../migrations/operator/2020_09_30_135749_create_branches_table.php';
        (new \CreateBranchesTable())->up();

        require_once __DIR__.'/../../migrations/operator/2020_09_30_082556_create_operator_roles_table.php';
        (new \CreateOperatorRolesTable())->up();

        require_once __DIR__.'/../../migrations/operator/2020_09_30_092119_create_operators_table.php';
        (new \CreateOperatorsTable())->up();

        require_once __DIR__.'/../../migrations/operator/2020_10_01_064502_create_operator_branch_pivot_table.php';
        (new \CreateOperatorBranchPivotTable())->up();
    }

    protected function migrateWarehouse(): void
    {
        require_once __DIR__.'/../../migrations/warehouse/2020_10_02_063622_create_warehouse_table.php';
        (new \CreateWarehouseTable())->up();

        require_once __DIR__.'/../../migrations/warehouse/2020_10_02_063647_create_stocks_table.php';
        (new \CreateStocksTable())->up();
    }

    public function migrateAll(): void
    {
        $this->migrateProduct();
        $this->migrateOperator();
        $this->migrateCustomer();
        $this->migrateDescription();
        $this->migrateWarehouse();
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
