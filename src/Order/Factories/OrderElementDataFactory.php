<?php

namespace Grixu\SociusModels\Order\Factories;

use Grixu\DataFactories\Factory;
use Grixu\SociusModels\Order\DataTransferObjects\OrderElementData;

class OrderElementDataFactory extends Factory
{
    public static function new(): OrderElementDataFactory
    {
        return new self();
    }

    public function create(array $parameters = []): OrderElementData
    {
        return new OrderElementData(
            $parameters +
            [
                'xlId' => rand(1,1000),
                'productIndex' => (string) rand(100000000, 999999999),
                'amount' => (float) rand(1, 999),
                'receivedAt' => now(),
            ]
        );
    }
}
