<?php

namespace Grixu\SociusModels\Product\DataTransferObjects;

use Carbon\Carbon;
use Grixu\RelationshipDataTransferObject\RelationshipDataTransferObject;

class BrandData  extends RelationshipDataTransferObject
{
    public string $name;
    public Carbon $updatedAt;
    public int $xlId;
}
