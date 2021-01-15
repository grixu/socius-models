<?php

namespace Grixu\SociusModels\Customer\Models;

use Grixu\SociusModels\Customer\Factories\CustomerFactory;
use Grixu\SociusModels\Operator\Models\Operator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Schema;

/**
 * @property Carbon sync_ts
 * @property int operator_id
 * @property string name
 * @property string country
 * @property string vat_number
 * @property Carbon updated_at
 * @property int payment_period
 * @property int xl_id
 * @property mixed email
 * @property mixed phone2
 * @property mixed phone1
 * @property mixed district
 * @property mixed voivodeship
 * @property mixed street
 * @property mixed city
 * @property mixed postal_code
 */
class Customer extends Model
{
    use HasFactory;

    public $timestamps = false;
    public $incrementing = true;

    protected $fillable = [
        'name',
        'country',
        'postal_code',
        'city',
        'vat_number',
        'street',
        'voivodeship',
        'district',
        'phone1',
        'phone2',
        'email',
        'payment_period',
        'xl_id',
        'sync_ts',
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'name' => 'string',
        'country' => 'string',
        'postal_code' => 'string',
        'city' => 'string',
        'vat_number' => 'string',
        'street' => 'string',
        'voivodeship' => 'string',
        'district' => 'string',
        'phone1' => 'string',
        'phone2' => 'string',
        'email' => 'string',
        'payment_period' => 'integer',
        'xl_id' => 'integer',
    ];

    protected $dates = [
        'sync_ts',
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

    public static function newFactory()
    {
        return CustomerFactory::new();
    }
}
