<?php

namespace Grixu\SociusModels\Operator\Factories;

use Grixu\SociusModels\Operator\Models\Branch;
use Illuminate\Database\Eloquent\Factories\Factory;

class BranchFactory extends Factory
{
    protected $model = Branch::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'xlId' => $this->faker->numberBetween(100000000, 999999999),
            'syncTs' => now(),
            'updatedAt' => now(),
            'createdAt' => now(),
        ];
    }
}
