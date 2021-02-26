<?php

namespace Grixu\SociusModels\Order\Factories;

use Grixu\SociusModels\Order\Models\Order;
use Grixu\SociusModels\Order\Models\OrderElement;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderElementFactory extends Factory
{
    protected $model = OrderElement::class;

    public function definition()
    {
        return [
            'xlId' => $this->faker->numberBetween(100000000, 999999999),
            'orderId' => Order::factory(),
            'amount' => $this->faker->numberBetween(1, 999),
            'sentAt' => now(),
            'receivedAt' => now(),
            'receivedDetailedStatus' => $this->faker->paragraph,
            'productIndex' => $this->faker->numberBetween(100000000000, 999999999999),
        ];
    }
}
