<?php

namespace Grixu\SociusModels\Order\Factories;

use Grixu\DataFactories\Factory;
use Grixu\SociusModels\Order\DataTransferObjects\OrderData;
use Grixu\SociusModels\Order\Enums\ReceiveStatusEnum;

class OrderDataFactory extends Factory
{
    public static function new(): OrderDataFactory
    {
        return new self();
    }

    public function create(array $parameters = []): OrderData
    {
        return new OrderData(
            $parameters
            + [
                'xlId' => rand(1, 1000),
                'orderNumber' => (string) rand(100000000, 999999999),
                'receiveStatus' => ReceiveStatusEnum::WAITING_FOR_ADD(),
                'receiveCreatedAt' => now(),
            ]
        );
    }
}
