<?php

namespace Grixu\SociusModels\Operator\Factories;

use Grixu\SociusModels\Operator\Models\Operator;
use Grixu\SociusModels\Operator\Models\OperatorRole;
use Illuminate\Database\Eloquent\Factories\Factory;

class OperatorFactory extends Factory
{
    protected $model = Operator::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'xlUsername' => $this->faker->userName,
            'email' => $this->faker->email,
            'xlId' => $this->faker->numberBetween(100000000, 999999999),
            'syncTs' => now(),
            'operatorRoleId' => OperatorRole::factory(),
            'updatedAt' => now(),
            'createdAt' => now(),
        ];
    }
}
