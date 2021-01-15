<?php

namespace Grixu\SociusModels\Product\Models;

use Grixu\SociusModels\Product\Factories\CategoryFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int parent_id
 * @property int id
 * @property int xl_id
 * @property string name
 * @property Category parent
 * @property \Illuminate\Support\Carbon sync_ts
 * @property \Illuminate\Support\Carbon updated_at
 */
class Category extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $casts = [
        'name' => 'string'
    ];

     protected $dates = [
        'sync_ts',
        'updated_at'
    ];

    protected $fillable = [
        'name',
        'xl_id',
        'sync_ts',
        'created_at',
        'updated_at',
    ];

    public function parent(): BelongsTo
    {
        return $this->belongsTo(
            self::class,
            'parent_id',
            'id'
        );
    }

    public function children(): HasMany
    {
        return $this->hasMany(
            self::class,
            'parent_id',
            'id'
        );
    }

    public static function newFactory()
    {
        return CategoryFactory::new();
    }
}
