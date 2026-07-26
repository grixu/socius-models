<?php

namespace Grixu\SociusModels\Product\Factories;

use Grixu\DataFactories\Factory;
use Grixu\SociusModels\Product\DataTransferObjects\ProductTypeData;

class ProductTypeDataFactory extends Factory
{
    public static function new(): ProductTypeDataFactory
    {
        return new self();
    }

    public function create(array $parameters = []): ProductTypeData
    {
        return ProductTypeData::from(
            $parameters
            + [
                'name' => 'Testowy typ',
                'updatedAt' => now()->subWeek(),
                'xlId' => rand(100, 999),
            ]
        );
    }
}
