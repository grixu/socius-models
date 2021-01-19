<?php

namespace Grixu\SociusModels\Customer\DataTransferObjects;

use Illuminate\Support\Carbon;
use Spatie\DataTransferObject\DataTransferObject;

class CustomerData extends DataTransferObject
{
    public string $name;
    public string $country;
    public string $postalCode;
    public string $city;
    public string $vatNumber;
    public string $street;
    public string $voivodeship;
    public string $district;
    public ?string $phone1;
    public ?string $phone2;
    public ?string $email;
    public int $paymentPeriod;
    public int $xlId;
    public Carbon $syncTs;
    public Carbon $updatedAt;
    public ?int $operatorId;
}
