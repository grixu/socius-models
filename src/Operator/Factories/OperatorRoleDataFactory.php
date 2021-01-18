<?php

namespace Grixu\SociusModels\Operator\Factories;

use Grixu\SociusModels\Operator\DataTransferObjects\OperatorRoleData;
use Grixu\DataFactories\Factory;

class OperatorRoleDataFactory extends Factory
{
    public static function new(): OperatorRoleDataFactory
    {
        return new self();
    }

    public function create(array $parameters = []): OperatorRoleData
    {
        return new OperatorRoleData(
            $parameters +
            [
                'name' => 'Testowy klient',
                'updatedAt' => now(),
                'xlId' => 1,
            ]
        );
    }
}
