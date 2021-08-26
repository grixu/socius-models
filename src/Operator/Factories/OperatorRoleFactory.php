<?php

namespace Grixu\SociusModels\Operator\Factories;

use Grixu\SociusModels\Operator\Models\OperatorRole;
use Illuminate\Database\Eloquent\Factories\Factory;

class OperatorRoleFactory extends Factory
{
    protected $model = OperatorRole::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'xl_id' => $this->faker->numberBetween(100000000, 999999999),
            'updated_at' => now(),
            'created_at' => now(),
        ];
    }
}
