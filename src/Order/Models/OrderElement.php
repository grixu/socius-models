<?php

namespace Grixu\SociusModels\Order\Models;

use Grixu\SociusModels\Order\Factories\OrderElementFactory;
use Grixu\SociusModels\Product\Models\Product;
use Grixu\SociusModels\Warehouse\Models\Warehouse;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Schema;

/**
 * @property Carbon sentAt
 * @property Carbon receivedAt
 * @property int id
 * @property int xlId
 * @property int orderId
 * @property int warehouseId
 * @property int productId
 * @property string productIndex
 * @property string receivedDetailedStatus
 * @property double amount
 */
class OrderElement extends Model
{
    use HasFactory;

    public $timestamps = false;
    public $incrementing = true;

    protected $dates = [
        'sentAt',
        'receivedAt',
    ];

    protected $fillable = [
        'xlId',
        'orderId',
        'amount',
        'sentAt',
        'receivedAt',
        'receivedDetailedStatus',
        'productIndex',
        'productId',
        'warehouseId',
    ];

    protected $casts = [
        'amount' => 'double',
        'xlId' => 'integer',
    ];

    public function order(): BelongsTo
    {
        return $this->belongsTo(
            Order::class,
            'orderId',
            'id'
        );
    }

    public function product(): ?BelongsTo
    {
        if (Schema::hasTable('products')) {
            return $this->belongsTo(
                Product::class,
                'productId',
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

    public static function newFactory()
    {
        return OrderElementFactory::new();
    }
}
