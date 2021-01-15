<?php

namespace Grixu\SociusModels\Product\Factories;

use Grixu\SociusModels\Product\Models\ProductType;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductTypeFactory extends Factory
{
    protected $model = ProductType::class;

    public function definition()
    {
        return [
            'name' => $this->faker->safeColorName,
            'xl_id' => $this->faker->numberBetween(100000000, 999999999),
            'updated_at' => now()->subMonth(),
            'created_at' => now(),
        ];
    }
}
