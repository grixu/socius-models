<?php

namespace Grixu\SociusModels\Product\Factories;

use Grixu\SociusModels\Product\Enums\ProductMeasureUnitEnum;
use Grixu\SociusModels\Product\Enums\ProductVatTypeEnum;
use Grixu\SociusModels\Product\Models\Brand;
use Grixu\SociusModels\Product\Models\Product;
use Grixu\SociusModels\Product\Models\ProductType;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'index' => Str::random(50),
            'ean' => Str::random(40),
            'measureUnit' => ProductMeasureUnitEnum::PAIR(),
            'taxGroup' => ProductVatTypeEnum::VAT23(),
            'taxValue' => 23,
            'weight' => 1.00,
            'xlId' => $this->faker->numberBetween(1000000000,9999999999),
            'syncTs' => now(),
            'brandId' => Brand::factory(),
            'productTypeId' => ProductType::factory(),
            'availability' => $this->faker->numberBetween(0,1),
            'attachments' => $this->faker->numberBetween(0,1),
            'blocked' => $this->faker->numberBetween(0,1),
            'archived' =>$this->faker->numberBetween(0,1),
            'eshop' => $this->faker->numberBetween(0,1),
            'updatedAt' => now(),
            'createdAt' => now(),
        ];
    }
}
