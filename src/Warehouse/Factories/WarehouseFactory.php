<?php

namespace Grixu\SociusModels\Warehouse\Factories;

use Grixu\SociusModels\Customer\Models\Customer;
use Grixu\SociusModels\Operator\Models\Operator;
use Grixu\SociusModels\Warehouse\Enums\WarehouseLockEnum;
use Grixu\SociusModels\Warehouse\Models\Warehouse;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Schema;

class WarehouseFactory extends Factory
{
    protected $model = Warehouse::class;

    public function definition()
    {
        $def = [
            'name' => $this->faker->name,
            'desc' => $this->faker->paragraph,
            'country' => $this->faker->userName,
            'internal' => $this->faker->numberBetween(0, 1),
            'stock_counting' => $this->faker->numberBetween(0, 1),
            'xl_id' => $this->faker->numberBetween(100000000, 999999999),
            'locked' => WarehouseLockEnum::UNLOCKED(),
            'last_modification' => now()->subWeek(),
            'stock_counting_date' => now()->subWeek(),
            'sync_ts' => now()->subMonth(),
            'updated_at' => now(),
            'created_at' => now(),
        ];

        if (Schema::hasTable('customers')) {
            $def += ['customer_id' =>  Customer::factory()];
        }

        if (Schema::hasTable('operators')) {
            $def += ['operator_id' => Operator::factory()];
        }

        return $def;
    }
}
