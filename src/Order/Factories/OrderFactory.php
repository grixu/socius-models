<?php

namespace Grixu\SociusModels\Order\Factories;

use Grixu\SociusModels\Order\Enums\ReceiveStatusEnum;
use Grixu\SociusModels\Order\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    protected $model = Order::class;

    public function definition(): array
    {
        return [
            'xl_id' => $this->faker->numberBetween(100000000, 999999999),
            'order_number' => $this->faker->numberBetween(100000000, 999999999),
            'receive_status' => ReceiveStatusEnum::ADDED(),
            'receive_created_at' => now(),
            'receive_updated_at' => now(),
            'received_detailed_status' => $this->faker->paragraph,
        ];
    }
}
