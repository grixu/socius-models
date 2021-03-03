<?php

namespace Grixu\SociusModels\Order\DataTransferObjects;

use Grixu\RelationshipDataTransferObject\RelationshipDataTransferObject;
use Grixu\SociusModels\Order\Enums\ReceiveStatusEnum;
use Illuminate\Support\Carbon;

class OrderData extends RelationshipDataTransferObject
{
    public int $xlId;
    public ?string $orderNumber;
    public ReceiveStatusEnum $receiveStatus;
    public ?Carbon $receiveCreatedAt;
    public ?Carbon $receiveUpdatedAt;
    public ?string $receivedDetailedStatus;
}
