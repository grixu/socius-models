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
            'xl_id' => $this->faker->numberBetween(100000000, 999999999),
            'sync_ts' => now(),
            'updated_at' => now(),
            'created_at' => now(),
        ];
    }
}
