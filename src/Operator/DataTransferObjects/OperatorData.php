<?php

namespace Grixu\SociusModels\Operator\DataTransferObjects;

use Grixu\RelationshipDataTransferObject\RelationshipDataTransferObject;
use Illuminate\Support\Carbon;

class OperatorData extends RelationshipDataTransferObject
{
    public string $name;
    public string $xlUsername;
    public string $email;
    public Carbon $syncTs;
    public int $xlId;
    public Carbon $updatedAt;
}
