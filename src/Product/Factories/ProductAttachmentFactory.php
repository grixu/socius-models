<?php

namespace Grixu\SociusModels\Product\Factories;

use Grixu\SociusModels\Product\Models\Product;
use Grixu\SociusModels\Product\Models\ProductAttachment;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductAttachmentFactory extends Factory
{
    protected $model = ProductAttachment::class;

    public function definition(): array
    {
        return [
            'filename' => $this->faker->name,
            'type' => Str::random(3),
            'xl_id' => $this->faker->numberBetween(10000, 99999),
            'product_id' => Product::factory()->create()->id,
            'updated_at' => now(),
            'created_at' => now(),
        ];
    }
}
