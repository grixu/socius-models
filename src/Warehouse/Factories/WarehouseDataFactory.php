<?php

namespace Grixu\SociusModels\Warehouse\Factories;

use Grixu\SociusModels\Warehouse\DataTransferObjects\WarehouseData;
use Grixu\SociusModels\Warehouse\Enums\WarehouseLockEnum;
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
            $parameters +
            [
                'name' => 'Testowy magazyn',
                'desc' => 'Testowy opis',
                'internal' => (bool) rand(0,1),
                'country' => 'PL',
                'stockCounting' => (bool) rand(0,1),
                'stockCountingDate' => now()->subDay(),
                'lastModification' => now()->subWeek(),
                'locked' => WarehouseLockEnum::UNLOCKED(),
                'operatorId' => rand(1,4),
                'customerId' => 1,
                'syncTs' => now(),
                'updatedAt' => now(),
                'xlId' => 1,
            ]
        );
    }
}
