<?php

namespace Grixu\SociusModels\Description\DataTransferObjects;

use Illuminate\Support\Carbon;
use Spatie\DataTransferObject\DataTransferObject;

class ProductDescriptionData extends DataTransferObject
{
    public string $name;
    public ?string $desc;
    public ?string $pageTitle;
    public ?string $keywords;
    public ?string $shortDesc;
    public ?string $metaDesc;
    public ?string $url;
    public ?Carbon $lastModification;
    public ?Carbon $lastModificationDesc;
    public string $xlId;
    public int $xlLanguageId;
    public int $xlProductId;
    public Carbon $syncTs;
    public Carbon $updatedAt;
}
