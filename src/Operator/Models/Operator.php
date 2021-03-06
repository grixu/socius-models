<?php

namespace Grixu\SociusModels\Operator\Models;

use Grixu\SociusModels\Operator\Factories\OperatorFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @property \Illuminate\Support\Carbon sync_ts
 * @property \Illuminate\Support\Carbon updated_at
 * @property int operator_role_id
 * @property int id
 * @property int xl_id
 * @property string xl_username
 * @property string name
 * @property string email
 */
class Operator extends Model
{
    use HasFactory;

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

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
        'operator_role_id',
    ];

    protected $casts = [
        'name' => 'string',
        'xl_username' => 'string',
        'email' => 'string',
        'xl_id' => 'integer',
    ];

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
