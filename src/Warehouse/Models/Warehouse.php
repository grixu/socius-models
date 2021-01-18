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
 * @property \Illuminate\Support\Carbon syncTs
 * @property string name
 * @property string desc
 * @property bool internal
 * @property string country
 * @property bool stockCounting
 * @property WarehouseLockEnum locked
 * @property Operator operator
 * @property Customer customer
 * @property \Illuminate\Support\Carbon stockCountingDate
 * @property \Illuminate\Support\Carbon lastModification
 * @property \Illuminate\Support\Carbon updatedAt
 * @property int xlId
 * @property int id
 * @property int operatorId
 * @property int customerId
 */
class Warehouse extends Model
{
    use HasFactory;

    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';

    public $timestamps = false;

    protected $casts = [
        'name' => 'string',
        'desc' => 'string',
        'internal' => 'boolean',
        'country' => 'string',
        'stockCounting' => 'boolean',
        'locked' => WarehouseLockEnum::class,
    ];

    protected $dates = [
        'syncTs',
        'stockCountingDate',
        'lastModification',
        'updatedAt',
    ];

    protected $fillable = [
        'name',
        'desc',
        'internal',
        'locked',
        'country',
        'stockCountingDate',
        'stockCounting',
        'lastModification',
        'customerId',
        'xlId',
        'syncTs',
        'createdAt',
        'updatedAt',
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

    public function stocks(): HasMany
    {
        return $this->hasMany(
            Stock::class,
            'warehouseId',
            'id'
        );
    }

    public static function newFactory()
    {
        return WarehouseFactory::new();
    }
}
