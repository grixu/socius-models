<?php

namespace Grixu\SociusModels\Order\DataTransferObjects;

use Grixu\RelationshipDataTransferObject\RelationshipDataTransferObject;
use Grixu\SociusModels\Casters\CarbonCaster;
use Illuminate\Support\Carbon;
use Spatie\DataTransferObject\Attributes\CastWith;

class OrderElementData extends RelationshipDataTransferObject
{
    public int $xlId;

    public string $productIndex;

    public float|int $amount;

    #[CastWith(CarbonCaster::class)]
    public Carbon|null $receivedAt;

    public string|null $receivedDetailedStatus;
}
