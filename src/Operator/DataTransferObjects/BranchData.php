<?php

namespace Grixu\SociusModels\Operator\DataTransferObjects;

use Grixu\RelationshipDataTransferObject\RelationshipDataTransferObject;
use Illuminate\Support\Carbon;

class BranchData extends RelationshipDataTransferObject
{
    public string $name;
    public int $xlId;
    public Carbon $syncTs;
    public Carbon $updatedAt;
}
