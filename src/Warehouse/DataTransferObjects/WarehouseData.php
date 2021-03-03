<?php

namespace Grixu\SociusModels\Warehouse\DataTransferObjects;

use Grixu\RelationshipDataTransferObject\RelationshipDataTransferObject;
use Grixu\SociusModels\Warehouse\Enums\WarehouseTypeEnum;
use Illuminate\Support\Carbon;

class WarehouseData extends RelationshipDataTransferObject
{
    public string $name;
    public string $desc;
    public string $country;
    public string $street;
    public string $city;
    public string $postCode;
    public WarehouseTypeEnum $type;
    public bool $locked;
    public Carbon $syncTs;
    public Carbon $updatedAt;
    public int $xlId;
}
