<?php

namespace Grixu\SociusModels\Product\DataTransferObjects;

use Grixu\SociusDto\SociusDto;
use Grixu\SociusModels\Casters\CarbonCaster;
use Illuminate\Support\Carbon;
use Spatie\LaravelData\Attributes\WithCast;

class CategoryData extends SociusDto
{
    public string $name;

    #[WithCast(CarbonCaster::class)]
    public Carbon $syncTs;

    public int $xlId;
}
