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
            'xl_id' => $this->faker->numberBetween(100000000, 999999999),
            'updated_at' => now()->subMonth(),
            'created_at' => now(),
        ];
    }
}
