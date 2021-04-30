<?php

namespace Grixu\SociusModels\Description\DataTransferObjects;

use Grixu\RelationshipDataTransferObject\RelationshipDataTransferObject;
use Grixu\SociusModels\Casters\CarbonCaster;
use Illuminate\Support\Carbon;
use Spatie\DataTransferObject\Attributes\CastWith;

class ProductDescriptionData extends RelationshipDataTransferObject
{
    public string $name;

    public string|null $desc;

    public string|null $pageTitle;

    public string|null $keywords;

    public string|null $shortDesc;

    public string|null $metaDesc;

    public string|null $url;

    #[CastWith(CarbonCaster::class)]
    public Carbon|null $lastModification;

    #[CastWith(CarbonCaster::class)]
    public Carbon|null $lastModificationDesc;

    public string $xlId;

    #[CastWith(CarbonCaster::class)]
    public Carbon $syncTs;

    #[CastWith(CarbonCaster::class)]
    public Carbon $updatedAt;
}
