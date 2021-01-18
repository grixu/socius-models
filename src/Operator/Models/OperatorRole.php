<?php

namespace Grixu\SociusModels\Operator\Models;

use Grixu\SociusModels\Operator\Factories\OperatorRoleFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property \Illuminate\Support\Carbon updatedAt
 * @property string name
 * @property int xlId
 * @property int id
 * @property int operatorRoleId
 */
class OperatorRole extends Model
{
    use HasFactory;

    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';

    public $timestamps = false;
    public $incrementing = true;

    protected $dates = [
        'updatedAt'
    ];

    protected $fillable = [
        'name',
        'xlId',
        'createdAt',
        'updatedAt',
    ];

    protected $casts = [
        'name' => 'string',
        'xlId' => 'integer',
    ];

    public function operators(): HasMany
    {
        return $this->hasMany(
            Operator::class,
            'operatorRoleId',
            'id'
        );
    }

    public static function newFactory()
    {
        return OperatorRoleFactory::new();
    }
}
