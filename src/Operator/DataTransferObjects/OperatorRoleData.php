<?php

namespace Grixu\SociusModels\Operator\DataTransferObjects;

use Illuminate\Support\Carbon;
use Spatie\DataTransferObject\DataTransferObject;

class OperatorRoleData extends DataTransferObject
{
    public string $name;
    public int $xlId;
    public Carbon $updatedAt;
}
