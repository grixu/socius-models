<?php

namespace Grixu\SociusModels\Product\Factories;

use Grixu\SociusModels\Product\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    protected $model = Category::class;

    public function definition()
    {
        return [
            'name' => $this->faker->streetName,
            'xlId' => $this->faker->numberBetween(100000000, 999999999),
            'syncTs' => now(),
            'updatedAt' => now(),
            'createdAt' => now(),
        ];
    }
}
