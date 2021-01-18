<?php

namespace Grixu\SociusModels\Description\Factories;

use Grixu\SociusModels\Description\Models\Language;
use Grixu\SociusModels\Description\Models\ProductDescription;
use Grixu\SociusModels\Product\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Schema;

class ProductDescriptionFactory extends Factory
{
    protected $model = ProductDescription::class;

    public function definition()
    {
        $def = [
            'name' => $this->faker->name,
            'desc' => $this->faker->name,
            'languageId' => Language::factory(),
            'pageTitle' => $this->faker->name,
            'keywords' => $this->faker->paragraph,
            'shortDesc' => $this->faker->name,
            'metaDesc' => $this->faker->name,
            'url' => $this->faker->name,
            'lastModification' => now()
                ->subYears(30)
                ->subSeconds($this->faker->numberBetween(111111, 999999))
                ->timestamp,
            'lastModificationDesc' => now()
                ->subYears(30)
                ->subSeconds($this->faker->numberBetween(111111, 999999))
                ->timestamp,
            'xlId' => $this->faker->numberBetween(100000000, 999999999),
            'syncTs' => now()->subYear(),
            'updatedAt' => now(),
            'createdAt' => now(),
        ];

        if (Schema::hasTable('products')) {
            $def += ['productId' => Product::factory()];
        }

        return $def;
    }
}
