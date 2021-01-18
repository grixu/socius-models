<?php

namespace Grixu\SociusModels\Operator\Factories;

use Grixu\SociusModels\Operator\DataTransferObjects\OperatorBranchData;
use Grixu\DataFactories\Factory;

class OperatorBranchDataFactory extends Factory
{
    public static function new(): OperatorBranchDataFactory
    {
        return new self();
    }

    public function create(array $parameters = []): OperatorBranchData
    {
        return new OperatorBranchData(
            $parameters +
            [
                'updatedAt' => now(),
                'xlBranchId' => 1,
                'xlOperatorId' => 1,
            ]
        );
    }
}
