<?php

namespace Grixu\SociusModels\Product\Factories;

use Grixu\SociusModels\Product\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    protected $model = Category::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->streetName,
            'xl_id' => $this->faker->numberBetween(100000000, 999999999),
            'sync_ts' => now(),
            'updated_at' => now(),
            'created_at' => now(),
        ];
    }
}
