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
 * @property Carbon syncTs
 * @property int operatorId
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

    public static function newFactory()
    {
        return CustomerFactory::new();
    }
}
