<?php

namespace Grixu\SociusModels\Warehouse\Factories;

use Grixu\SociusModels\Warehouse\Models\Stock;
use Illuminate\Database\Eloquent\Factories\Factory;

class StockFactory extends Factory
{
    protected $model = Stock::class;

    public function definition()
    {
        return [
            'amount' => $this->faker->numberBetween(0, 10000),
            'xlId' => $this->faker->numberBetween(100000000, 999999999),
            'receptionDate' => now()->subWeek(),
            'syncTs' => now()->subMonth(),
            'updatedAt' => now(),
            'createdAt' => now(),
        ];
    }
}
