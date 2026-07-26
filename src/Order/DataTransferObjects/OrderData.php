<?php

namespace Grixu\SociusModels\Order\DataTransferObjects;

use Grixu\SociusDto\SociusDto;
use Grixu\SociusModels\Casters\CarbonCaster;
use Grixu\SociusModels\Casters\ReceiveStatusEnumCaster;
use Grixu\SociusModels\Order\Enums\ReceiveStatusEnum;
use Illuminate\Support\Carbon;
use Spatie\LaravelData\Attributes\WithCast;

class OrderData extends SociusDto
{
    public int $xlId;

    public string|null $orderNumber;

    #[WithCast(ReceiveStatusEnumCaster::class)]
    public ReceiveStatusEnum $receiveStatus;

    #[WithCast(CarbonCaster::class)]
    public Carbon|null $receiveCreatedAt;

    #[WithCast(CarbonCaster::class)]
    public Carbon|null $receiveUpdatedAt;

    public string|null $receivedDetailedStatus;
}
