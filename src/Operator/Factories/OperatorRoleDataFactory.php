<?php

namespace Grixu\SociusModels\Operator\Factories;

use Grixu\DataFactories\Factory;
use Grixu\SociusModels\Operator\DataTransferObjects\OperatorRoleData;

class OperatorRoleDataFactory extends Factory
{
    public static function new(): OperatorRoleDataFactory
    {
        return new self();
    }

    public function create(array $parameters = []): OperatorRoleData
    {
        return OperatorRoleData::from(
            $parameters
            + [
                'name' => 'Testowy klient',
                'updatedAt' => now(),
                'xlId' => rand(100, 999),
            ]
        );
    }
}
