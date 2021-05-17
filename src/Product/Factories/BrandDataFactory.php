<?php

namespace Grixu\SociusModels\Product\Factories;

use Grixu\SociusModels\Product\DataTransferObjects\BrandData;
use Grixu\DataFactories\Factory;

class BrandDataFactory extends Factory
{
    public static function new(): BrandDataFactory
    {
        return new self();
    }

    public function create(array $parameters = []): BrandData
    {
        return new BrandData(
            $parameters +
            [
                'name' => 'Testowa marka',
                'updatedAt' => now()->subWeek(),
                'xlId' => rand(100,999),
            ]
        );
    }
}
