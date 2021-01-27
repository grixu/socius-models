<?php

namespace Grixu\SociusModels\Customer\DataTransferObjects;

use Grixu\RelationshipDataTransferObject\RelationshipDataTransferObject;
use Illuminate\Support\Carbon;

class CustomerData extends RelationshipDataTransferObject
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
}
