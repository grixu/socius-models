<?php

namespace Grixu\SociusModels\Warehouse\Factories;

use Grixu\SociusModels\Warehouse\Enums\WarehouseLockEnum;
use Grixu\SociusModels\Warehouse\Models\Warehouse;
use Illuminate\Database\Eloquent\Factories\Factory;

class WarehouseFactory extends Factory
{
    protected $model = Warehouse::class;

    public function definition()
    {
        return [
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
    }
}
