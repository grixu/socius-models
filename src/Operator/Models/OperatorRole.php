<?php

namespace Grixu\SociusModels\Operator\Models;

use Grixu\SociusModels\Operator\Factories\OperatorRoleFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;

/**
 * @property Carbon $updated_at
 * @property string $name
 * @property int $xl_id
 * @property int $id
 * @property int $operator_role_id
 */
class OperatorRole extends Model
{
    use HasFactory;

    public const CREATED_AT = 'created_at';
    public const UPDATED_AT = 'updated_at';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'xl_id',
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'xl_id' => 'integer',
        'updated_at' => 'immutable_datetime',
    ];

    public function operators(): HasMany
    {
        return $this->hasMany(
            Operator::class,
            'operator_role_id',
            'id'
        );
    }

    public static function newFactory()
    {
        return OperatorRoleFactory::new();
    }
}
