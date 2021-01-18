<?php

namespace Grixu\SociusModels\Operator\Factories;

use Grixu\SociusModels\Operator\Models\OperatorRole;
use Illuminate\Database\Eloquent\Factories\Factory;

class OperatorRoleFactory extends Factory
{
    protected $model = OperatorRole::class;

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
