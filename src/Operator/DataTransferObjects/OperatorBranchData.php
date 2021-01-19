<?php

namespace Grixu\SociusModels\Operator\DataTransferObjects;

use Illuminate\Support\Carbon;
use Spatie\DataTransferObject\DataTransferObject;

class OperatorBranchData extends DataTransferObject
{
    public int $branchId;
    public int $operatorId;
    public Carbon $updatedAt;
}
