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
            'xl_username' => $this->faker->userName,
            'email' => $this->faker->email,
            'xl_id' => $this->faker->numberBetween(100000000, 999999999),
            'sync_ts' => now(),
            'operator_role_id' => OperatorRole::factory(),
            'updated_at' => now(),
            'created_at' => now(),
        ];
    }
}
