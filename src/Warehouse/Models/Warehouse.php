<?php

namespace Grixu\SociusModels\Warehouse\Models;

use Grixu\SociusModels\Customer\Models\Customer;
use Grixu\SociusModels\Warehouse\Enums\WarehouseTypeEnum;
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
 * @property string country
 * @property string street
 * @property string city
 * @property string post_code
 * @property WarehouseTypeEnum type
 * @property bool stockCounting
 * @property bool locked
 * @property Customer customer
 * @property \Illuminate\Support\Carbon updated_at
 * @property int xl_id
 * @property int id
 * @property int customer_id
 */
class Warehouse extends Model
{
    use HasFactory;

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public $timestamps = false;

    protected $casts = [
        'name' => 'string',
        'desc' => 'string',
        'country' => 'string',
        'stockCounting' => 'boolean',
        'locked' => 'boolean',
        'type' => WarehouseTypeEnum::class,
    ];

    protected $dates = [
        'sync_ts',
        'stockCountingDate',
        'last_modification',
        'updated_at',
    ];

    protected $fillable = [
        'name',
        'desc',
        'country',
        'street',
        'city',
        'post_code',
        'type',
        'locked',
        'sync_ts',
        'customer_id',
        'xl_id',
        'created_at',
        'updated_at',
    ];

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
