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
 * @property \Illuminate\Support\Carbon sync_ts
 * @property \Illuminate\Support\Carbon updated_at
 * @property int operator_role_id
 * @property int operator_id
 * @property int customer_id
 * @property int id
 * @property int xl_id
 * @property string xl_username
 * @property string name
 * @property string email
 */
class Operator extends Model
{
    use HasFactory;

    public $timestamps = false;
    public $incrementing = true;

    protected $dates = [
        'sync_ts',
        'updated_at'
    ];

    protected $fillable = [
        'name',
        'xl_username',
        'email',
        'sync_ts',
        'xl_id',
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'name' => 'string',
        'xl_username' => 'string',
        'email' => 'string',
        'xl_id' => 'integer',
    ];

    public function customers(): ?HasMany
    {
        if (Schema::hasTable('customers')) {
            return $this->hasMany(
                Customer::class,
                'operator_id',
                'id'
            );
        }

        return null;
    }

    public function role(): BelongsTo
    {
        return $this->belongsTo(
            OperatorRole::class,
            'operator_role_id',
            'id'
        );
    }

    public function branches(): BelongsToMany
    {
        return $this->belongsToMany(
            Branch::class,
            'operator_branch',
            'operator_id',
            'branch_id'
        )
            ->withTimestamps()
            ->using(OperatorBranch::class);
    }

    public static function newFactory()
    {
        return OperatorFactory::new();
    }
}
