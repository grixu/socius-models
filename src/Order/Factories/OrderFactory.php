<?php

namespace Grixu\SociusModels\Order\Factories;

use Grixu\SociusModels\Order\Enums\ReceiveStatusEnum;
use Grixu\SociusModels\Order\Enums\SendingStatusEnum;
use Grixu\SociusModels\Order\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    protected $model = Order::class;

    public function definition()
    {
        return [
            'xlId' => $this->faker->numberBetween(100000000, 999999999),
            'orderNumber' => $this->faker->numberBetween(100000000, 999999999),
            'receiveStatus' => ReceiveStatusEnum::ADDED(),
            'receiveCreatedAt' => now(),
            'receiveUpdatedAt' => now(),
            'sendingStatus' => SendingStatusEnum::OPENED(),
            'sendingCreatedAt' => now(),
            'sendingUpdatedAt' => now(),
            'receivedDetailedStatus' => $this->faker->paragraph,
        ];
    }
}
