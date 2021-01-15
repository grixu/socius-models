<?php

namespace Grixu\SociusModels\Warehouse\Models;

use Grixu\SociusModels\Customer\Models\Customer;
use Grixu\SociusModels\Operator\Models\Operator;
use Grixu\SociusModels\Warehouse\Enums\WarehouseLockEnum;
use Grixu\SociusModels\Warehouse\Factories\WarehouseFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Schema;

/**
 * @property \Illuminate\Support\Carbon sync_ts
 * @property string name
 * @property string desc
 * @property bool internal
 * @property string country
 * @property bool stock_counting
 * @property WarehouseLockEnum locked
 * @property Operator operator
 * @property Customer customer
 * @property \Illuminate\Support\Carbon stock_counting_date
 * @property \Illuminate\Support\Carbon last_modification
 * @property \Illuminate\Support\Carbon updated_at
 * @property int xl_id
 * @property int id
 * @property int operator_id
 * @property int customer_id
 */
class Warehouse extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $casts = [
        'name' => 'string',
        'desc' => 'string',
        'internal' => 'boolean',
        'country' => 'string',
        'stock_counting' => 'boolean',
        'locked' => WarehouseLockEnum::class,
    ];

    protected $dates = [
        'sync_ts',
        'stock_counting_date',
        'last_modification',
        'updated_at',
    ];

    protected $fillable = [
        'name',
        'desc',
        'internal',
        'locked',
        'country',
        'stock_counting_date',
        'stock_counting',
        'last_modification',
        'customer_id',
        'xl_id',
        'sync_ts',
        'created_at',
        'updated_at',
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

    public function stocks(): HasMany
    {
        return $this->hasMany(
            Stock::class,
            'warehouse_id',
            'id'
        );
    }

    public static function newFactory()
    {
        return WarehouseFactory::new();
    }
}
