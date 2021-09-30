<?php

namespace Grixu\SociusModels\Warehouse\Models;

use Grixu\SociusModels\Product\Models\Product;
use Grixu\SociusModels\Warehouse\Factories\StockFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Schema;

/**
 * @property int $xl_id
 * @property int $warehouse_id
 * @property int $product_id
 * @property int $id
 * @property float $amount
 * @property Carbon $sync_ts
 * @property Carbon $updated_at
 * @property Carbon $reception_date
 * @property Warehouse $warehouse
 * @property Product $product
 */
class Stock extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $casts = [
        'amount' => 'double',
        'xl_id' => 'string',
        'reception_date' => 'immutable_datetime',
        'sync_ts' => 'immutable_datetime',
        'updated_at' => 'immutable_datetime',
    ];

    protected $fillable = [
        'amount',
        'reception_date',
        'warehouse_id',
        'product_id',
        'xl_id',
        'sync_ts',
        'created_at',
        'updated_at',
    ];

    public function warehouse(): BelongsTo
    {
        return $this->belongsTo(
            Warehouse::class,
            'warehouse_id',
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

    public static function newFactory()
    {
        return StockFactory::new();
    }
}
