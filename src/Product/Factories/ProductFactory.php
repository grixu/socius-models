<?php

namespace Grixu\SociusModels\Product\Factories;

use Grixu\SociusModels\Product\Enums\ProductMeasureUnitEnum;
use Grixu\SociusModels\Product\Enums\ProductVatTypeEnum;
use Grixu\SociusModels\Product\Models\Product;
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
            'measure_unit' => ProductMeasureUnitEnum::PAIR(),
            'tax_group' => ProductVatTypeEnum::VAT23(),
            'tax_value' => 23,
            'weight' => 1.00,
            'xl_id' => $this->faker->numberBetween(1000000000,9999999999),
            'sync_ts' => now(),
            'availability' => $this->faker->numberBetween(0,1),
            'attachments' => $this->faker->numberBetween(0,1),
            'blocked' => $this->faker->numberBetween(0,1),
            'archived' =>$this->faker->numberBetween(0,1),
            'eshop' => $this->faker->numberBetween(0,1),
            'updated_at' => now(),
            'created_at' => now(),
        ];
    }
}
