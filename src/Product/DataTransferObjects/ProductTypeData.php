<?php

namespace Grixu\SociusModels\Product\DataTransferObjects;

use Carbon\Carbon;
use Grixu\RelationshipDataTransferObject\RelationshipDataTransferObject;
use Spatie\DataTransferObject\DataTransferObject;

class ProductTypeData  extends RelationshipDataTransferObject
{
    public string $name;
    public Carbon $updatedAt;
    public int $xlId;
}
