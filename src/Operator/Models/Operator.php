<?php

namespace Grixu\SociusModels\Operator\Models;

use Grixu\SociusModels\Customer\Models\Customer;
use Grixu\SociusModels\Operator\Factories\OperatorFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Schema;

/**
 * @property \Illuminate\Support\Carbon syncTs
 * @property \Illuminate\Support\Carbon updatedAt
 * @property int operatorRoleId
 * @property int operatorId
 * @property int customerId
 * @property int id
 * @property int xlId
 * @property string xlUsername
 * @property string name
 * @property string email
 */
class Operator extends Model
{
    use HasFactory;

    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';

    public $timestamps = false;
    public $incrementing = true;

    protected $dates = [
        'syncTs',
        'updatedAt'
    ];

    protected $fillable = [
        'name',
        'xlUsername',
        'email',
        'syncTs',
        'xlId',
        'createdAt',
        'updatedAt',
        'operatorRoleId',
    ];

    protected $casts = [
        'name' => 'string',
        'xlUsername' => 'string',
        'email' => 'string',
        'xlId' => 'integer',
    ];

    public function customers(): ?HasMany
    {
        if (Schema::hasTable('customers')) {
            return $this->hasMany(
                Customer::class,
                'operatorId',
                'id'
            );
        }

        return null;
    }

    public function role(): BelongsTo
    {
        return $this->belongsTo(
            OperatorRole::class,
            'operatorRoleId',
            'id'
        );
    }

    public function branches(): BelongsToMany
    {
        return $this->belongsToMany(
            Branch::class,
            'operator_branch',
            'operatorId',
            'branchId'
        )
            ->withTimestamps()
            ->using(OperatorBranch::class);
    }

    public static function newFactory()
    {
        return OperatorFactory::new();
    }
}
