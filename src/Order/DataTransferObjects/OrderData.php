<?php

namespace Grixu\SociusModels\Order\DataTransferObjects;

use Grixu\RelationshipDataTransferObject\RelationshipDataTransferObject;
use Grixu\SociusModels\Casters\CarbonCaster;
use Grixu\SociusModels\Casters\ReceiveStatusEnumCaster;
use Grixu\SociusModels\Order\Enums\ReceiveStatusEnum;
use Illuminate\Support\Carbon;
use Spatie\DataTransferObject\Attributes\CastWith;

class OrderData extends RelationshipDataTransferObject
{
    public int $xlId;

    public string|null $orderNumber;

    #[CastWith(ReceiveStatusEnumCaster::class)]
    public ReceiveStatusEnum $receiveStatus;

    #[CastWith(CarbonCaster::class)]
    public Carbon|null $receiveCreatedAt;

    #[CastWith(CarbonCaster::class)]
    public Carbon|null $receiveUpdatedAt;

    public string|null $receivedDetailedStatus;
}
