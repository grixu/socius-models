<?php

namespace Grixu\SociusModels\Warehouse\DataTransferObjects;

use Grixu\SociusDto\SociusDto;
use Grixu\SociusModels\Casters\CarbonCaster;
use Illuminate\Support\Carbon;
use Spatie\DataTransferObject\Attributes\CastWith;

class StockData extends SociusDto
{
    public float|int $amount;

    #[CastWith(CarbonCaster::class)]
    public Carbon $receptionDate;

    #[CastWith(CarbonCaster::class)]
    public Carbon $syncTs;

    public string $xlId;
}
