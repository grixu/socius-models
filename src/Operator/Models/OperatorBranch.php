<?php

namespace Grixu\SociusModels\Operator\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class OperatorBranch extends Pivot
{
    public const CREATED_AT = 'created_at';
    public const UPDATED_AT = 'updated_at';

    public $timestamps = true;
    public $incrementing = false;
    protected $table = 'operator_branch';

    protected $dates = [
        'updated_at',
    ];

    protected $fillable = [
        'branch_id',
        'operator_id',
        'created_at',
        'updated_at',
    ];
}
