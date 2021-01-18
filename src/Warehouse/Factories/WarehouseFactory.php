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
            'stockCounting' => $this->faker->numberBetween(0, 1),
            'xlId' => $this->faker->numberBetween(100000000, 999999999),
            'locked' => WarehouseLockEnum::UNLOCKED(),
            'lastModification' => now()->subWeek(),
            'stockCountingDate' => now()->subWeek(),
            'syncTs' => now()->subMonth(),
            'updatedAt' => now(),
            'createdAt' => now(),
        ];

        if (Schema::hasTable('customers')) {
            $def += ['customerId' =>  Customer::factory()];
        }

        if (Schema::hasTable('operators')) {
            $def += ['operatorId' => Operator::factory()];
        }

        return $def;
    }
}
