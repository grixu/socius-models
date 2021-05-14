<?php

namespace Grixu\SociusModels\Warehouse\DataTransferObjects;

use Grixu\SociusDto\SociusDto;
use Grixu\SociusModels\Casters\CarbonCaster;
use Grixu\SociusModels\Casters\WarehouseTypeEnumCaster;
use Grixu\SociusModels\Warehouse\Enums\WarehouseTypeEnum;
use Illuminate\Support\Carbon;
use Spatie\DataTransferObject\Attributes\CastWith;

class WarehouseData extends SociusDto
{
    public string $name;
    public string $desc;
    public string $country;
    public string $street;
    public string $city;
    public string $postCode;
    public bool $locked;
    public int $xlId;

    #[CastWith(WarehouseTypeEnumCaster::class)]
    public WarehouseTypeEnum $type;

    #[CastWith(CarbonCaster::class)]
    public Carbon $syncTs;

    #[CastWith(CarbonCaster::class)]
    public Carbon $updatedAt;
}
