<?php

namespace Grixu\SociusModels\Product\Factories;

use Grixu\SociusModels\Product\DataTransferObjects\CategoryData;
use Grixu\DataFactories\Factory;

class CategoryDataFactory extends Factory
{
    public static function new(): CategoryDataFactory
    {
        return new self();
    }

    public function create(array $parameters = []): CategoryData
    {
        return new CategoryData(
            $parameters +
            [
                'name' => 'Testowa kat',
                'syncTs' => now(),
                'updatedAt' => now(),
                'xlId' => rand(100,999),
            ]
        );
    }
}
