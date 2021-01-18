<?php

namespace Grixu\SociusModels\Warehouse\DataTransferObjects;

use Carbon\Carbon;
use Spatie\DataTransferObject\DataTransferObject;

class StockData extends DataTransferObject
{
    public float $amount;
    public Carbon $receptionDate;
    public Carbon $syncTs;
    public Carbon $updatedAt;
    public int $xlWarehouseId;
    public int $xlProductId;
    public string $xlId;
}
