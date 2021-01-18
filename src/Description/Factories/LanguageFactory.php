<?php

namespace Grixu\SociusModels\Description\Factories;

use Grixu\SociusModels\Description\Models\Language;
use Illuminate\Database\Eloquent\Factories\Factory;

class LanguageFactory extends Factory
{
    protected $model = Language::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'xlId' => $this->faker->numberBetween(100000000, 999999999),
            'updatedAt' => now(),
            'createdAt' => now(),
        ];
    }
}
