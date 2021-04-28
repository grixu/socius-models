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
            'xl_id' => $this->faker->numberBetween(100000000, 999999999),
            'order_id' => Order::factory(),
            'amount' => $this->faker->numberBetween(1, 999),
            'received_at' => now(),
            'received_detailed_status' => $this->faker->paragraph,
            'product_index' => $this->faker->numberBetween(100000000000, 999999999999),
        ];
    }
}
