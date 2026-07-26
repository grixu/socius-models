<?php

namespace Grixu\SociusModels\Order\DataTransferObjects;

use Grixu\SociusDto\SociusDto;
use Grixu\SociusModels\Casters\CarbonCaster;
use Illuminate\Support\Carbon;
use Spatie\LaravelData\Attributes\WithCast;

class OrderElementData extends SociusDto
{
    public int $xlId;

    public string $productIndex;

    public float|int $amount;

    #[WithCast(CarbonCaster::class)]
    public Carbon|null $receivedAt;

    public string|null $receivedDetailedStatus;
}
