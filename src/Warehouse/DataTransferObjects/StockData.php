<?php

namespace Grixu\SociusModels\Warehouse\DataTransferObjects;

use Grixu\SociusDto\SociusDto;
use Grixu\SociusModels\Casters\CarbonCaster;
use Illuminate\Support\Carbon;
use Spatie\LaravelData\Attributes\WithCast;

class StockData extends SociusDto
{
    public float|int $amount;

    #[WithCast(CarbonCaster::class)]
    public Carbon $receptionDate;

    #[WithCast(CarbonCaster::class)]
    public Carbon $syncTs;

    public string $xlId;
}
