<?php

namespace Grixu\SociusModels\Order\DataTransferObjects;

use Grixu\SociusDto\SociusDto;
use Grixu\SociusModels\Casters\CarbonCaster;
use Illuminate\Support\Carbon;
use Spatie\DataTransferObject\Attributes\CastWith;

class OrderElementData extends SociusDto
{
    public int $xlId;

    public string $productIndex;

    public float|int $amount;

    #[CastWith(CarbonCaster::class)]
    public Carbon|null $receivedAt;

    public string|null $receivedDetailedStatus;
}
