<?php

namespace Grixu\SociusModels\Description\Factories;

use Grixu\SociusModels\Description\Models\ProductDescription;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductDescriptionFactory extends Factory
{
    protected $model = ProductDescription::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'desc' => $this->faker->name,
            'page_title' => $this->faker->name,
            'keywords' => $this->faker->paragraph,
            'short_desc' => $this->faker->name,
            'meta_desc' => $this->faker->name,
            'url' => $this->faker->name,
            'last_modification' => now()
                ->subYears(30)
                ->subSeconds($this->faker->numberBetween(111111, 999999))
                ->timestamp,
            'last_modification_desc' => now()
                ->subYears(30)
                ->subSeconds($this->faker->numberBetween(111111, 999999))
                ->timestamp,
            'xl_id' => $this->faker->numberBetween(100000000, 999999999),
            'sync_ts' => now()->subYear(),
            'updated_at' => now(),
            'created_at' => now(),
        ];
    }
}
