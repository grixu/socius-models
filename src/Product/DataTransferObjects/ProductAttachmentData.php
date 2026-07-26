<?php

namespace Grixu\SociusModels\Product\DataTransferObjects;

use Grixu\SociusDto\SociusDto;
use Grixu\SociusModels\Casters\CarbonCaster;
use Illuminate\Support\Carbon;
use Spatie\LaravelData\Attributes\WithCast;

class ProductAttachmentData extends SociusDto
{
    public string $filename;
    public string $type;
    public int $xlId;

    #[WithCast(CarbonCaster::class)]
    public Carbon $xlUpdatedAt;

    #[WithCast(CarbonCaster::class)]
    public Carbon $syncTs;
}
