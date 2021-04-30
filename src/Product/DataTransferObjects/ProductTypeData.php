<?php

namespace Grixu\SociusModels\Product\DataTransferObjects;

use Carbon\Carbon;
use Grixu\RelationshipDataTransferObject\RelationshipDataTransferObject;
use Grixu\SociusModels\Casters\CarbonCaster;
use Spatie\DataTransferObject\Attributes\CastWith;

class ProductTypeData  extends RelationshipDataTransferObject
{
    public string $name;

    #[CastWith(CarbonCaster::class)]
    public Carbon $updatedAt;

    public int $xlId;
}
