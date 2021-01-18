<?php

namespace Grixu\SociusModels\Operator\DataTransferObjects;

use Illuminate\Support\Carbon;
use Spatie\DataTransferObject\DataTransferObject;

class OperatorData extends DataTransferObject
{
    public string $name;
    public string $xlUsername;
    public string $email;
    public Carbon $syncTs;
    public int $xlId;
    public Carbon $updatedAt;
    public ?int $roleId;
}
