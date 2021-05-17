<?php

namespace Grixu\SociusModels\Product\DataTransferObjects;

use Carbon\Carbon;
use Grixu\SociusDto\SociusDto;
use Grixu\SociusModels\Casters\CarbonCaster;
use Spatie\DataTransferObject\Attributes\CastWith;

class ProductTypeData  extends SociusDto
{
    public string $name;

    #[CastWith(CarbonCaster::class)]
    public Carbon $updatedAt;

    public int $xlId;
}
