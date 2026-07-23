<?php

namespace Grixu\SociusModels\Customer\Factories;

use Grixu\DataFactories\Factory;
use Grixu\SociusModels\Customer\DataTransferObjects\CustomerData;

class CustomerDataFactory extends Factory
{
    public function create(array $parameters = []): CustomerData
    {
        return CustomerData::from(
            $parameters
            + [
                'name' => 'Testowy klient',
                'country' => 'PL',
                'postalCode' => '87-100',
                'city' => 'Toruń',
                'vatNumber' => '9562338798',
                'street' => 'Polna 140B',
                'voivodeship' => 'Kujawsko-pomorskie',
                'district' => 'Toruń',
                'paymentPeriod' => 15,
                'syncTs' => now(),
                'updatedAt' => now(),
                'xlId' => rand(100, 999),
            ]
        );
    }
}
