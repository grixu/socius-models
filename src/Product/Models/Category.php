<?php

namespace Grixu\SociusModels\Product\Models;

use Grixu\SociusModels\Product\Factories\CategoryFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int parentId
 * @property int id
 * @property int xlId
 * @property string name
 * @property Category parent
 * @property \Illuminate\Support\Carbon syncTs
 * @property \Illuminate\Support\Carbon updatedAt
 */
class Category extends Model
{
    use HasFactory;

    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';

    public $timestamps = false;

    protected $casts = [
        'name' => 'string'
    ];

     protected $dates = [
        'syncTs',
        'updatedAt'
    ];

    protected $fillable = [
        'name',
        'xlId',
        'syncTs',
        'parentId',
        'createdAt',
        'updatedAt',
    ];

    public function parent(): BelongsTo
    {
        return $this->belongsTo(
            self::class,
            'parentId',
            'id'
        );
    }

    public function children(): HasMany
    {
        return $this->hasMany(
            self::class,
            'parentId',
            'id'
        );
    }

    public function products(): HasMany
    {
        return $this->hasMany(
            Product::class,
            'categoryId',
            'id'
        );
    }

    public static function newFactory()
    {
        return CategoryFactory::new();
    }
}
