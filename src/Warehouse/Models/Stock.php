<?php

namespace Grixu\SociusModels\Warehouse\Models;

use Grixu\SociusModels\Product\Models\Product;
use Grixu\SociusModels\Warehouse\Factories\StockFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Schema;

/**
 * @property \Illuminate\Support\Carbon syncTs
 * @property int xlId
 * @property int warehouseId
 * @property int productId
 * @property int id
 * @property float amount
 * @property \Illuminate\Support\Carbon updatedAt
 * @property \Illuminate\Support\Carbon receptionDate
 * @property Warehouse warehouse
 * @property Product product
 */
class Stock extends Model
{
    use HasFactory;

    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';

    public $timestamps = false;

    protected $casts = [
        'amount' => 'double',
        'xlId' => 'string',
    ];

    protected $dates = [
        'receptionDate',
        'syncTs',
        'updatedAt',
    ];

    protected $fillable = [
        'amount',
        'receptionDate',
        'warehouseId',
        'productId',
        'xlId',
        'syncTs',
        'createdAt',
        'updatedAt',
    ];

    public function warehouse(): BelongsTo
    {
        return $this->belongsTo(
            Warehouse::class,
            'warehouseId',
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

    public static function newFactory()
    {
        return StockFactory::new();
    }
}
