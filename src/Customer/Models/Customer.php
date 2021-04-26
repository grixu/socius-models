<?php

namespace Grixu\SociusModels\Customer\Models;

use Grixu\SociusModels\Customer\Factories\CustomerFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * @property Carbon syncTs
 * @property string name
 * @property string country
 * @property string vatNumber
 * @property Carbon updatedAt
 * @property int paymentPeriod
 * @property int xlId
 * @property mixed email
 * @property mixed phone2
 * @property mixed phone1
 * @property mixed district
 * @property mixed voivodeship
 * @property mixed street
 * @property mixed city
 * @property mixed postalCode
 */
class Customer extends Model
{
    use HasFactory;

    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';

    public $timestamps = false;
    public $incrementing = true;

    protected $fillable = [
        'name',
        'country',
        'postalCode',
        'city',
        'vatNumber',
        'street',
        'voivodeship',
        'district',
        'phone1',
        'phone2',
        'email',
        'paymentPeriod',
        'xlId',
        'syncTs',
        'createdAt',
        'updatedAt',
    ];

    protected $casts = [
        'name' => 'string',
        'country' => 'string',
        'postalCode' => 'string',
        'city' => 'string',
        'vatNumber' => 'string',
        'street' => 'string',
        'voivodeship' => 'string',
        'district' => 'string',
        'phone1' => 'string',
        'phone2' => 'string',
        'email' => 'string',
        'paymentPeriod' => 'integer',
        'xlId' => 'integer',
    ];

    protected $dates = [
        'syncTs',
        'updatedAt',
    ];

    public static function newFactory()
    {
        return CustomerFactory::new();
    }
}
