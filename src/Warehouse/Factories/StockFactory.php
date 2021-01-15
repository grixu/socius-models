<?php

namespace Grixu\SociusModels\Warehouse\Factories;

use Grixu\SociusModels\Product\Models\Product;
use Grixu\SociusModels\Warehouse\Models\Stock;
use Grixu\SociusModels\Warehouse\Models\Warehouse;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Schema;

class StockFactory extends Factory
{
    protected $model = Stock::class;

    public function definition()
    {
        $def = [
            'amount' => $this->faker->numberBetween(0, 10000),
            'warehouse_id' => Warehouse::factory(),
            'xl_id' => $this->faker->numberBetween(100000000, 999999999),
            'reception_date' => now()->subWeek(),
            'sync_ts' => now()->subMonth(),
            'updated_at' => now(),
            'created_at' => now(),
        ];

        if (Schema::hasTable('products')) {
            $def += ['product_id' => Product::factory()];
        }

        return $def;
    }
}
