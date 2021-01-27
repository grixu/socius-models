<?php

namespace Grixu\SociusModels\Product\DataTransferObjects;

use Grixu\RelationshipDataTransferObject\RelationshipDataTransferObject;
use Illuminate\Support\Carbon;

class CategoryData extends RelationshipDataTransferObject
{
    public string $name;
    public Carbon $syncTs;
    public Carbon $updatedAt;
    public int $xlId;
}
