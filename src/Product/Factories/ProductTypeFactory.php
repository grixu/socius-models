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
            'xlId' => $this->faker->numberBetween(100000000, 999999999),
            'updatedAt' => now()->subMonth(),
            'createdAt' => now(),
        ];
    }
}
