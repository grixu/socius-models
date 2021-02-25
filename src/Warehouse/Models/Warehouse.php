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
 * @property \Illuminate\Support\Carbon syncTs
 * @property string name
 * @property string desc
 * @property string country
 * @property string street
 * @property string city
 * @property string postCode
 * @property WarehouseTypeEnum type
 * @property bool stockCounting
 * @property bool locked
 * @property Customer customer
 * @property \Illuminate\Support\Carbon updatedAt
 * @property int xlId
 * @property int id
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
        'country' => 'string',
        'stockCounting' => 'boolean',
        'locked' => 'boolean',
        'type' => WarehouseTypeEnum::class,
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
        'country',
        'street',
        'city',
        'postCode',
        'type',
        'locked',
        'syncTs',
        'customerId',
        'xlId',
        'createdAt',
        'updatedAt',
    ];

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
