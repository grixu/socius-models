<?php

namespace Grixu\SociusModels\Operator\Factories;

use Grixu\DataFactories\Factory;
use Grixu\SociusModels\Operator\DataTransferObjects\OperatorData;

class OperatorDataFactory extends Factory
{
    public static function new(): OperatorDataFactory
    {
        return new self();
    }

    public function create(array $parameters = []): OperatorData
    {
        return new OperatorData(
            $parameters
            + [
                'name' => 'Testowy klient',
                'xlUsername' => 'USER',
                'email' => 'user@cdn.xl',
                'syncTs' => now(),
                'updatedAt' => now(),
                'xlId' => rand(100, 999),
            ]
        );
    }
}
