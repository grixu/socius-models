<?php

namespace Grixu\SociusModels\Operator\Models;

use Grixu\SociusModels\Operator\Factories\BranchFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Carbon;

/**
 * @property Carbon $sync_ts
 * @property Carbon $updated_at
 * @property int $xl_id
 * @property string $name
 */
class Branch extends Model
{
    use HasFactory;

    public const CREATED_AT = 'created_at';
    public const UPDATED_AT = 'updated_at';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'sync_ts',
        'xl_id',
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'xl_id' => 'integer',
        'sync_ts' => 'immutable_datetime',
        'updated_at' => 'immutable_datetime',
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
