<?php

namespace Grixu\SociusModels\Order\DataTransferObjects;

use Grixu\RelationshipDataTransferObject\RelationshipDataTransferObject;
use Illuminate\Support\Carbon;

class OrderElementData extends RelationshipDataTransferObject
{
    public int $xlId;
    public string $productIndex;
    public float $amount;
    public ?Carbon $receivedAt;
    public ?string $receivedDetailedStatus;
}
