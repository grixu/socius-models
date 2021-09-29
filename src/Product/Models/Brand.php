<?php

namespace Grixu\SociusModels\Product\Models;

use Grixu\SociusModels\Product\Factories\BrandFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;

/**
 * @property Carbon $updated_at
 * @property string $name
 * @property int $xl_id
 * @property int $id
 * @property int $brand_id
 */
class Brand extends Model
{
    use HasFactory;

    public const CREATED_AT = 'created_at';
    public const UPDATED_AT = 'updated_at';

    public $timestamps = false;

    protected $casts = [
        'updated_at' => 'immutable_datetime',
    ];

    protected $fillable = [
        'name',
        'xl_id',
        'created_at',
        'updated_at',
    ];

    public function products(): HasMany
    {
        return $this->hasMany(
            Product::class,
            'brand_id',
            'id'
        );
    }

    public static function newFactory()
    {
        return BrandFactory::new();
    }
}
