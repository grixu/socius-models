<?php

namespace Grixu\SociusModels\Customer\DataTransferObjects;

use Grixu\SociusDto\SociusDto;
use Grixu\SociusModels\Casters\CarbonCaster;
use Illuminate\Support\Carbon;
use Spatie\DataTransferObject\Attributes\CastWith;

class CustomerData extends SociusDto
{
    public string $name;

    public string $country;

    public string $postalCode;

    public string $city;

    public string $vatNumber;

    public string $street;

    public string $voivodeship;

    public string $district;

    public string|null $phone1;

    public string|null $phone2;

    public string|null $email;

    public int $paymentPeriod;

    public int $xlId;

    #[CastWith(CarbonCaster::class)]
    public Carbon $syncTs;

    #[CastWith(CarbonCaster::class)]
    public Carbon $updatedAt;
}
