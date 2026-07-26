<?php

namespace Grixu\SociusModels\Description\Factories;

use Grixu\DataFactories\Factory;
use Grixu\SociusModels\Description\DataTransferObjects\LanguageData;

class LanguageDataFactory extends Factory
{
    public static function new(): LanguageDataFactory
    {
        return new self();
    }

    public function create(array $parameters = []): LanguageData
    {
        return LanguageData::from(
            $parameters
            + [
                'name' => 'Testowy język',
                'updatedAt' => now(),
                'xlId' => rand(100, 999),
            ]
        );
    }
}
