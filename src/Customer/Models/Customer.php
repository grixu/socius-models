<?php

namespace Grixu\SociusModels\Customer\Models;

use Grixu\SociusModels\Customer\Factories\CustomerFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * @property Carbon $sync_ts
 * @property string $name
 * @property string $country
 * @property string $vat_number
 * @property Carbon $updated_at
 * @property int $payment_period
 * @property int $xl_id
 * @property string $email
 * @property string $phone2
 * @property string $phone1
 * @property string $district
 * @property string $voivodeship
 * @property string $street
 * @property string $city
 * @property string $postal_code
 */
class Customer extends Model
{
    use HasFactory;

    public const CREATED_AT = 'created_at';
    public const UPDATED_AT = 'updated_at';

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

    public static function newFactory()
    {
        return CustomerFactory::new();
    }
}
