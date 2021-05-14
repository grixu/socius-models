<?php

namespace Grixu\SociusModels\Description\Factories;

use Grixu\SociusModels\Description\DataTransferObjects\LanguageData;
use Grixu\DataFactories\Factory;

class LanguageDataFactory extends Factory
{
    public static function new(): LanguageDataFactory
    {
        return new self();
    }

    public function create(array $parameters = []): LanguageData
    {
        return new LanguageData(
            $parameters +
            [
                'name' => 'Testowy język',
                'updatedAt' => now(),
                'xlId' => rand(100,999),
            ]
        );
    }
}
