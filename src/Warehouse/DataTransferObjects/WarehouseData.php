<?php

namespace Grixu\SociusModels\Warehouse\DataTransferObjects;

use Grixu\RelationshipDataTransferObject\RelationshipDataTransferObject;
use Grixu\SociusModels\Warehouse\Enums\WarehouseLockEnum;
use Illuminate\Support\Carbon;

class WarehouseData extends RelationshipDataTransferObject
{
    public string $name;
    public string $desc;
    public bool $internal;
    public string $country;
    public bool $stockCounting;
    public ?Carbon $stockCountingDate;
    public WarehouseLockEnum $locked;
    public ?Carbon $lastModification;
    public Carbon $syncTs;
    public Carbon $updatedAt;
    public int $xlId;
}
