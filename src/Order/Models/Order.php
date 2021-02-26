<?php

namespace Grixu\SociusModels\Order\Models;

use Grixu\SociusModels\Operator\Models\Operator;
use Grixu\SociusModels\Order\Enums\ReceiveStatusEnum;
use Grixu\SociusModels\Order\Enums\SendingStatusEnum;
use Grixu\SociusModels\Order\Factories\OrderFactory;
use Grixu\SociusModels\Warehouse\Models\Warehouse;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Schema;

/**
 * @property Carbon receiveCreatedAt
 * @property Carbon receiveUpdatedAt
 * @property Carbon sendingCreatedAt
 * @property Carbon sendingUpdatedAt
 * @property int id
 * @property int xlId
 * @property int warehouseId
 * @property int operatorId
 * @property string orderNumber
 * @property string receivedDetailedStatus
 * @property string receiveStatus
 * @property string sendingStatus
 */
class Order extends Model
{
    use HasFactory;

    public $timestamps = false;
    public $incrementing = true;

    protected $dates = [
        'receiveCreatedAt',
        'receiveUpdatedAt',
        'sendingCreatedAt',
        'sendingUpdatedAt'
    ];

    protected $fillable = [
        'xlId',
        'orderNumber',
        'receiveStatus',
        'receiveCreatedAt',
        'receiveUpdatedAt',
        'sendingStatus',
        'sendingCreatedAt',
        'sendingUpdatedAt',
        'receivedDetailedStatus',
        'warehouseId',
        'operatorId',
    ];

    protected $casts = [
        'receiveStatus' => ReceiveStatusEnum::class,
        'sendingStatus' => SendingStatusEnum::class,
        'xlId' => 'integer',
    ];

    public function operator(): ?BelongsTo
    {
        if (Schema::hasTable('operators')) {
            return $this->belongsTo(
                Operator::class,
                'operatorId',
                'id'
            );
        }

        return null;
    }

    public function warehouse(): ?BelongsTo
    {
        if (Schema::hasTable('warehouses')) {
            return $this->belongsTo(
                Warehouse::class,
                'warehouseId',
                'id'
            );
        }

        return null;
    }

    public static function newFactory(): OrderFactory
    {
        return OrderFactory::new();
    }
}
