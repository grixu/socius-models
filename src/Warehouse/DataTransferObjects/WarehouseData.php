<?php

namespace Grixu\SociusModels\Warehouse\DataTransferObjects;

use Grixu\SociusModels\Warehouse\Enums\WarehouseLockEnum;
use Illuminate\Support\Carbon;
use Spatie\DataTransferObject\DataTransferObject;

class WarehouseData  extends DataTransferObject
{
    public string $name;
    public string $desc;
    public bool $internal;
    public string $country;
    public bool $stockCounting;
    public ?Carbon $stockCountingDate;
    public WarehouseLockEnum $locked;
    public ?int $operatorId;
    public int $customerId;
    public ?Carbon $lastModification;
    public Carbon $syncTs;
    public Carbon $updatedAt;
    public int $xlId;
}
