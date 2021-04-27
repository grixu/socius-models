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
 * @property Carbon received_at
 * @property int id
 * @property int xl_id
 * @property int order_id
 * @property int warehouse_id
 * @property int product_id
 * @property string product_index
 * @property string received_detailed_status
 * @property double amount
 */
class OrderElement extends Model
{
    use HasFactory;

    public $timestamps = false;
    public $incrementing = true;

    protected $dates = [
        'sentAt',
        'received_at',
    ];

    protected $fillable = [
        'xl_id',
        'order_id',
        'amount',
        'sentAt',
        'received_at',
        'received_detailed_status',
        'product_index',
        'product_id',
        'warehouse_id',
    ];

    protected $casts = [
        'amount' => 'double',
        'xl_id' => 'integer',
    ];

    public function order(): BelongsTo
    {
        return $this->belongsTo(
            Order::class,
            'order_id',
            'id'
        );
    }

    public function product(): ?BelongsTo
    {
        if (Schema::hasTable('products')) {
            return $this->belongsTo(
                Product::class,
                'product_id',
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

    public static function newFactory()
    {
        return OrderElementFactory::new();
    }
}
