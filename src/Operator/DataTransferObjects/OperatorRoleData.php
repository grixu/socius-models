<?php

namespace Grixu\SociusModels\Operator\DataTransferObjects;

use Grixu\RelationshipDataTransferObject\RelationshipDataTransferObject;
use Illuminate\Support\Carbon;

class OperatorRoleData extends RelationshipDataTransferObject
{
    public string $name;
    public int $xlId;
    public Carbon $updatedAt;
}
