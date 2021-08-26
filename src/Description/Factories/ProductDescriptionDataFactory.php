<?php

namespace Grixu\SociusModels\Description\Factories;

use Grixu\DataFactories\Factory;
use Grixu\SociusModels\Description\DataTransferObjects\ProductDescriptionData;

class ProductDescriptionDataFactory extends Factory
{
    public static function new(): ProductDescriptionDataFactory
    {
        return new self();
    }

    public function create(array $parameters = []): ProductDescriptionData
    {
        return new ProductDescriptionData(
            $parameters
            + [
                'name' => 'Testowa nazwa produktu',
                'desc' => 'Testowy opis długi',
                'pageTitle' => 'Testowa nazwa strony',
                'keywords' => 'Testowe słowa kluczowe',
                'shortDesc' => 'Testowy opis krótki',
                'metaDesc' => 'Testowy meta opis',
                'url' => 'Testowy url',
                'lastModification' => now()->subMinute(),
                'updatedAt' => now(),
                'syncTs' => now(),
                'xlId' => (string) rand(100, 999),
            ]
        );
    }
}
