<?php

namespace Grixu\SociusModels\Description\DataTransferObjects;

use Grixu\SociusDto\SociusDto;
use Grixu\SociusModels\Casters\CarbonCaster;
use Illuminate\Support\Carbon;
use Spatie\LaravelData\Attributes\WithCast;

class ProductDescriptionData extends SociusDto
{
    public string $name;

    public string|null $desc;

    public string|null $pageTitle;

    public string|null $keywords;

    public string|null $shortDesc;

    public string|null $metaDesc;

    public string|null $url;

    #[WithCast(CarbonCaster::class)]
    public Carbon|null $lastModification;

    #[WithCast(CarbonCaster::class)]
    public Carbon|null $lastModificationDesc;

    public string $xlId;

    #[WithCast(CarbonCaster::class)]
    public Carbon $syncTs;
}
