<?php

namespace Grixu\SociusModels\Order\DataTransferObjects;

use Grixu\RelationshipDataTransferObject\RelationshipDataTransferObject;
use Illuminate\Support\Carbon;

class OrderElementData extends RelationshipDataTransferObject
{
    public int $xlId;
    public int $orderId;
    public int $productId;
    public string $productIndex;
    public int $warehouseId;
    public float $amount;
    public Carbon $sentAt;
    public ?Carbon $receivedAt;
    public ?string $receivedDetailedStatus;
}
