<?php

namespace Grixu\SociusModels\Operator\DataTransferObjects;

use Illuminate\Support\Carbon;
use Spatie\DataTransferObject\DataTransferObject;

class OperatorBranchData extends DataTransferObject
{
    public int $xlBranchId;
    public int $xlOperatorId;
    public Carbon $updatedAt;
}
