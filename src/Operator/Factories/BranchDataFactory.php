<?php

namespace Grixu\SociusModels\Operator\Factories;

use Grixu\DataFactories\Factory;
use Grixu\SociusModels\Operator\DataTransferObjects\BranchData;

class BranchDataFactory extends Factory
{
    public static function new(): BranchDataFactory
    {
        return new self();
    }

    public function create(array $parameters = []): BranchData
    {
        return new BranchData(
            $parameters
            + [
                'name' => 'Testowy klient',
                'syncTs' => now(),
                'updatedAt' => now(),
                'xlId' => rand(100, 999),
            ]
        );
    }
}
