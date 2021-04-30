<?php

namespace Grixu\SociusModels\Product\DataTransferObjects;

use Grixu\RelationshipDataTransferObject\RelationshipDataTransferObject;
use Grixu\SociusModels\Casters\CarbonCaster;
use Illuminate\Support\Carbon;
use Spatie\DataTransferObject\Attributes\CastWith;

class CategoryData extends RelationshipDataTransferObject
{
    public string $name;

    #[CastWith(CarbonCaster::class)]
    public Carbon $syncTs;

    #[CastWith(CarbonCaster::class)]
    public Carbon $updatedAt;

    public int $xlId;
}
