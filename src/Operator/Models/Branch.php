<?php

namespace Grixu\SociusModels\Operator\Models;

use Grixu\SociusModels\Operator\Factories\BranchFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @property \Illuminate\Support\Carbon syncTs
 * @property \Illuminate\Support\Carbon updatedAt
 * @property int xlId
 * @property string name
 */
class Branch extends Model
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
        'syncTs',
        'xlId',
        'createdAt',
        'updatedAt',
    ];

    protected $casts = [
        'name' => 'string',
        'xlId' => 'integer',
    ];

    public function operators(): BelongsToMany
    {
        return $this->belongsToMany(
            Operator::class,
            'operator_branch',
            'branchId',
            'operatorId'
        )
            ->withTimestamps()
            ->using(OperatorBranch::class);
    }

    public static function newFactory()
    {
        return BranchFactory::new();
    }
}
