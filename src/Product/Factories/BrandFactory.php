<?php

namespace Grixu\SociusModels\Product\Factories;

use Grixu\SociusModels\Product\Models\Brand;
use Illuminate\Database\Eloquent\Factories\Factory;

class BrandFactory extends Factory
{
    protected $model = Brand::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'xlId' => $this->faker->numberBetween(100000000, 999999999),
            'updatedAt' => now()->subMonth(),
            'createdAt' => now(),
        ];
    }
}
