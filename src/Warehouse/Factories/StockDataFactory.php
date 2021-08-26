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
            $parameters
            + [
                'amount' => (float) rand(1, 1000),
                'receptionDate' => now()->subDay(),
                'syncTs' => now(),
                'updatedAt' => now(),
                'xlId' => (string)rand(100, 999),
            ]
        );
    }
}
