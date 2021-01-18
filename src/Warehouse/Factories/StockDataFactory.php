<?php

namespace Grixu\SociusModels\Warehouse\Factories;

use Grixu\SociusModels\Warehouse\DataTransferObjects\StockData;
use Grixu\DataFactories\Factory;

class StockDataFactory extends Factory
{
    public static function new(): StockDataFactory
    {
        return new self();
    }

    public function create(array $parameters = []): StockData
    {
        return new StockData(
            $parameters +
            [
                'amount' => (double) rand(1,1000),
                'receptionDate' => now()->subDay(),
                'xlProductId' => rand(1,4),
                'xlWarehouseId' => 1,
                'syncTs' => now(),
                'updatedAt' => now(),
                'xlId' => '1',
            ]
        );
    }
}
