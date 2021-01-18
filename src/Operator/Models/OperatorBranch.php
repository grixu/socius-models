<?php

namespace Grixu\SociusModels\Operator\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class OperatorBranch extends Pivot
{
    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';

    public $timestamps = true;
    public $incrementing = false;
    protected $table = 'operator_branch';

    protected $dates = [
        'updatedAt'
    ];

    protected $fillable = [
        'branchId',
        'operatorId',
        'createdAt',
        'updatedAt',
    ];
}
