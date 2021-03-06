<?php

namespace Grixu\SociusModels\Warehouse\Models;

use Grixu\SociusModels\Product\Models\Product;
use Grixu\SociusModels\Warehouse\Factories\StockFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Schema;

/**
 * @property \Illuminate\Support\Carbon sync_ts
 * @property int xl_id
 * @property int warehouse_id
 * @property int product_id
 * @property int id
 * @property float amount
 * @property \Illuminate\Support\Carbon updated_at
 * @property \Illuminate\Support\Carbon reception_date
 * @property Warehouse warehouse
 * @property Product product
 */
class Stock extends Model
{
    use HasFactory;

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public $timestamps = false;

    protected $casts = [
        'amount' => 'double',
        'xl_id' => 'string',
    ];

    protected $dates = [
        'reception_date',
        'sync_ts',
        'updated_at',
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
