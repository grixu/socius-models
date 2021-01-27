<?php

namespace Grixu\SociusModels\Description\DataTransferObjects;

use Grixu\RelationshipDataTransferObject\RelationshipDataTransferObject;
use Illuminate\Support\Carbon;

class ProductDescriptionData extends RelationshipDataTransferObject
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
    public Carbon $syncTs;
    public Carbon $updatedAt;
}
