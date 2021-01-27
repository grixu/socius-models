<?php

namespace Grixu\SociusModels\Warehouse\DataTransferObjects;

use Carbon\Carbon;
use Grixu\RelationshipDataTransferObject\RelationshipDataTransferObject;

class StockData extends RelationshipDataTransferObject
{
    public float $amount;
    public Carbon $receptionDate;
    public Carbon $syncTs;
    public Carbon $updatedAt;
    public string $xlId;
}
