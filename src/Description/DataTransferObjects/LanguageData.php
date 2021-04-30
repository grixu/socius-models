<?php

namespace Grixu\SociusModels\Description\DataTransferObjects;

use Grixu\RelationshipDataTransferObject\RelationshipDataTransferObject;
use Grixu\SociusModels\Casters\CarbonCaster;
use Illuminate\Support\Carbon;
use Spatie\DataTransferObject\Attributes\CastWith;

class LanguageData extends RelationshipDataTransferObject
{
    public string $name;

    public int $xlId;

    #[CastWith(CarbonCaster::class)]
    public Carbon $updatedAt;
}
