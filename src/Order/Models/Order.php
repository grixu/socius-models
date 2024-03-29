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
 * @property int $id
 * @property int $xl_id
 * @property int $warehouse_id
 * @property int $operator_id
 * @property string $order_number
 * @property string $received_detailed_status
 * @property ReceiveStatusEnum $receive_status
 * @property Carbon $receive_created_at
 * @property Carbon $receive_updated_at
 */
class Order extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $fillable = [
        'xl_id',
        'order_number',
        'receive_status',
        'receive_created_at',
        'receive_updated_at',
        'received_detailed_status',
        'warehouse_id',
        'customer_id',
        'operator_id',
    ];

    protected $casts = [
        'receive_status' => ReceiveStatusEnum::class,
        'xl_id' => 'integer',
        'receive_created_at' => 'immutable_datetime',
        'receive_updated_at' => 'immutable_datetime',
    ];

    public function operator(): ?BelongsTo
    {
        if (Schema::hasTable('operators')) {
            return $this->belongsTo(
                Operator::class,
                'operator_id',
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
                'warehouse_id',
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
                'customer_id',
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
