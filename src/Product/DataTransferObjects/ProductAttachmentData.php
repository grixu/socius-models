<?php

namespace Grixu\SociusModels\Product\DataTransferObjects;

use Grixu\SociusDto\SociusDto;
use Grixu\SociusModels\Casters\CarbonCaster;
use Illuminate\Support\Carbon;
use Spatie\DataTransferObject\Attributes\CastWith;

class ProductAttachmentData extends SociusDto
{
    public string $name;
    public string $type;
    public int $xlId;
    public int $productId;
    public int|null $languageId;

    #[CastWith(CarbonCaster::class)]
    public Carbon $xlUpdatedAt;

    #[CastWith(CarbonCaster::class)]
    public Carbon $syncTs;

    #[CastWith(CarbonCaster::class)]
    public Carbon $updatedAt;
}