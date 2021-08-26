<?php

namespace Grixu\SociusModels\Warehouse\Factories;

use Grixu\SociusModels\Warehouse\Models\Stock;
use Illuminate\Database\Eloquent\Factories\Factory;

class StockFactory extends Factory
{
    protected $model = Stock::class;

    public function definition(): array
    {
        return [
            'amount' => $this->faker->numberBetween(0, 10000),
            'xl_id' => $this->faker->numberBetween(100000000, 999999999),
            'reception_date' => now()->subWeek(),
            'sync_ts' => now()->subMonth(),
            'updated_at' => now(),
            'created_at' => now(),
        ];
    }
}
