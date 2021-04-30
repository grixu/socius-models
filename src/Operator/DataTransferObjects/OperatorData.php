<?php

namespace Grixu\SociusModels\Operator\DataTransferObjects;

use Grixu\RelationshipDataTransferObject\RelationshipDataTransferObject;
use Grixu\SociusModels\Casters\CarbonCaster;
use Illuminate\Support\Carbon;
use Spatie\DataTransferObject\Attributes\CastWith;

class OperatorData extends RelationshipDataTransferObject
{
    public string $name;

    public string $xlUsername;

    public string $email;

    #[CastWith(CarbonCaster::class)]
    public Carbon $syncTs;

    public int $xlId;

    #[CastWith(CarbonCaster::class)]
    public Carbon $updatedAt;
}
