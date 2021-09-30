<?php

namespace Grixu\SociusModels\Operator\DataTransferObjects;

use Grixu\SociusDto\SociusDto;
use Grixu\SociusModels\Casters\CarbonCaster;
use Illuminate\Support\Carbon;
use Spatie\DataTransferObject\Attributes\CastWith;

class BranchData extends SociusDto
{
    public string $name;

    public int $xlId;

    #[CastWith(CarbonCaster::class)]
    public Carbon $syncTs;
}
