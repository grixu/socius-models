<?php

namespace Grixu\SociusModels\Product\Factories;

use Grixu\DataFactories\Factory;
use Grixu\SociusModels\Product\DataTransferObjects\BrandData;

class BrandDataFactory extends Factory
{
    public static function new(): BrandDataFactory
    {
        return new self();
    }

    public function create(array $parameters = []): BrandData
    {
        return new BrandData(
            $parameters
            + [
                'name' => 'Testowa marka',
                'updatedAt' => now()->subWeek(),
                'xlId' => rand(100, 999),
            ]
        );
    }
}
