<?php

namespace Grixu\SociusModels\Customer\Factories;

use Grixu\SociusModels\Customer\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    protected $model = Customer::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'country' => $this->faker->countryCode,
            'postal_code' => $this->faker->postcode,
            'city' => $this->faker->city,
            'vat_number' => $this->faker->numberBetween(1111111111, 9999999999),
            'street' => $this->faker->streetName,
            'voivodeship' => $this->faker->word,
            'district' => $this->faker->country,
            'phone1' => $this->faker->phoneNumber,
            'phone2' => $this->faker->phoneNumber,
            'email' => $this->faker->email,
            'payment_period' => $this->faker->numberBetween(0, 60),
            'xl_id' => $this->faker->numberBetween(100000000, 999999999),
            'sync_ts' => now(),
            'updated_at' => now(),
            'created_at' => now(),
        ];
    }
}
