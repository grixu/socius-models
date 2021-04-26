<?php

namespace Grixu\SociusModels\Order\Models;

use Grixu\SociusModels\Customer\Models\Customer;
use Grixu\SociusModels\Operator\Models\Operator;
use Grixu\SociusModels\Order\Enums\ReceiveStatusEnum;
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
 * @property int id
 * @property int xlId
 * @property int warehouseId
 * @property int operatorId
 * @property string orderNumber
 * @property string receivedDetailedStatus
 * @property ReceiveStatusEnum receiveStatus
 */
class Order extends Model
{
    use HasFactory;

    public $timestamps = false;
    public $incrementing = true;

    protected $dates = [
        'receiveCreatedAt',
        'receiveUpdatedAt',
    ];

    protected $fillable = [
        'xlId',
        'orderNumber',
        'receiveStatus',
        'receiveCreatedAt',
        'receiveUpdatedAt',
        'receivedDetailedStatus',
        'warehouseId',
        'customerId',
        'operatorId',
    ];

    protected $casts = [
        'receiveStatus' => ReceiveStatusEnum::class,
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

    public function customer(): ?BelongsTo
    {
        if (Schema::hasTable('customers')) {
            return $this->belongsTo(
                Customer::class,
                'customerId',
                'id'
            );
        }

        return null;
    }

    public static function newFactory()
    {
        return OrderFactory::new();
    }
}
