<?php

namespace Grixu\SociusModels\Warehouse\Factories;

use Grixu\SociusModels\Warehouse\DataTransferObjects\WarehouseData;
use Grixu\SociusModels\Warehouse\Enums\WarehouseTypeEnum;
use Grixu\DataFactories\Factory;

class WarehouseDataFactory extends Factory
{
    public static function new(): WarehouseDataFactory
    {
        return new self();
    }

    public function create(array $parameters = []): WarehouseData
    {
        return new WarehouseData(
            $parameters
            + [
                'name' => 'Testowy magazyn',
                'desc' => 'Testowy opis',
                'country' => 'PL',
                'street' => 'Ulica',
                'city' => 'Miasto',
                'postCode' => '00-000',
                'type' => WarehouseTypeEnum::DEPOSIT(),
                'locked' => (bool) rand(0, 1),
                'syncTs' => now(),
                'updatedAt' => now(),
                'xlId' => rand(100, 999),
            ]
        );
    }
}
