<?php

namespace Grixu\SociusModels\Customer\DataTransferObjects;

use Grixu\SociusDto\SociusDto;
use Grixu\SociusModels\Casters\CarbonCaster;
use Illuminate\Support\Carbon;
use Spatie\DataTransferObject\Attributes\CastWith;

class CustomerData extends SociusDto
{
    public string $name;

    public string|null $country;

    public string|null $postalCode;

    public string|null $city;

    public string|null $vatNumber;

    public string|null $street;

    public string|null $voivodeship;

    public string|null $district;

    public string|null $phone1;

    public string|null $phone2;

    public string|null $email;

    public int $paymentPeriod;

    public int $xlId;

    #[CastWith(CarbonCaster::class)]
    public Carbon $syncTs;
}
