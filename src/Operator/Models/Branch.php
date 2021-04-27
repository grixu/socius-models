<?php

namespace Grixu\SociusModels\Operator\Models;

use Grixu\SociusModels\Operator\Factories\BranchFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @property \Illuminate\Support\Carbon sync_ts
 * @property \Illuminate\Support\Carbon updated_at
 * @property int xl_id
 * @property string name
 */
class Branch extends Model
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
        'sync_ts',
        'xl_id',
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'name' => 'string',
        'xl_id' => 'integer',
    ];

    public function operators(): BelongsToMany
    {
        return $this->belongsToMany(
            Operator::class,
            'operator_branch',
            'branch_id',
            'operator_id'
        )
            ->withTimestamps()
            ->using(OperatorBranch::class);
    }

    public static function newFactory()
    {
        return BranchFactory::new();
    }
}
