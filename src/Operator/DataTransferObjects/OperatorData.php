<?php

namespace Grixu\SociusModels\Operator\DataTransferObjects;

use Grixu\SociusDto\SociusDto;
use Grixu\SociusModels\Casters\CarbonCaster;
use Illuminate\Support\Carbon;
use Spatie\DataTransferObject\Attributes\CastWith;

class OperatorData extends SociusDto
{
    public string $name;

    public string $xlUsername;

    public string $email;

    #[CastWith(CarbonCaster::class)]
    public Carbon $syncTs;

    public int $xlId;
}
