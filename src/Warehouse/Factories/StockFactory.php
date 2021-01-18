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
            'warehouseId' => Warehouse::factory(),
            'xlId' => $this->faker->numberBetween(100000000, 999999999),
            'receptionDate' => now()->subWeek(),
            'syncTs' => now()->subMonth(),
            'updatedAt' => now(),
            'createdAt' => now(),
        ];

        if (Schema::hasTable('products')) {
            $def += ['productId' => Product::factory()];
        }

        return $def;
    }
}
