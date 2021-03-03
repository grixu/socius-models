<?php

namespace Grixu\SociusModels\Warehouse\Factories;

use Grixu\SociusModels\Warehouse\Enums\WarehouseTypeEnum;
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
            'street' => $this->faker->userName,
            'city' => $this->faker->userName,
            'postCode' => $this->faker->userName,
            'type' => WarehouseTypeEnum::DEPOSIT(),
            'locked' => $this->faker->numberBetween(0, 1),
            'syncTs' => now()->subMonth(),
            'xlId' => $this->faker->numberBetween(100000000, 999999999),
            'updatedAt' => now(),
            'createdAt' => now(),
        ];
    }
}
