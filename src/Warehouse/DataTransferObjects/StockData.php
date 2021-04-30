<?php

namespace Grixu\SociusModels\Warehouse\DataTransferObjects;

use Grixu\RelationshipDataTransferObject\RelationshipDataTransferObject;
use Grixu\SociusModels\Casters\CarbonCaster;
use Illuminate\Support\Carbon;
use Spatie\DataTransferObject\Attributes\CastWith;

class StockData extends RelationshipDataTransferObject
{
    public float|int $amount;

    #[CastWith(CarbonCaster::class)]
    public Carbon $receptionDate;

    #[CastWith(CarbonCaster::class)]
    public Carbon $syncTs;

    #[CastWith(CarbonCaster::class)]
    public Carbon $updatedAt;

    public string $xlId;
}
