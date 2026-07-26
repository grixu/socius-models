<?php

namespace Grixu\SociusModels\Operator\DataTransferObjects;

use Grixu\SociusDto\SociusDto;
use Grixu\SociusModels\Casters\CarbonCaster;
use Illuminate\Support\Carbon;
use Spatie\LaravelData\Attributes\WithCast;

class BranchData extends SociusDto
{
    public string $name;

    public int $xlId;

    #[WithCast(CarbonCaster::class)]
    public Carbon $syncTs;
}
