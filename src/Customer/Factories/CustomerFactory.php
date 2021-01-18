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
            'postalCode' => $this->faker->postcode,
            'city' => $this->faker->city,
            'vatNumber' => $this->faker->numberBetween(1111111111, 9999999999),
            'street' => $this->faker->streetName,
            'voivodeship' => $this->faker->word,
            'district' => $this->faker->country,
            'phone1' => $this->faker->phoneNumber,
            'phone2' => $this->faker->phoneNumber,
            'email' => $this->faker->email,
            'paymentPeriod' => $this->faker->numberBetween(0,60),
            'xlId' => $this->faker->numberBetween(100000000, 999999999),
            'syncTs' => now(),
            'updatedAt' => now(),
            'createdAt' => now(),
        ];
    }
}
