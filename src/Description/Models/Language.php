<?php

namespace Grixu\SociusModels\Description\Models;

use Grixu\SociusModels\Description\Factories\LanguageFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;

/**
 * @property string $name
 * @property Carbon $updated_at
 * @property int $xl_id
 */
class Language extends Model
{
    use HasFactory;

    public $timestamps = true;

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

    public function descriptions(): HasMany
    {
        return $this->hasMany(
            ProductDescription::class,
            'language_id',
            'id'
        );
    }

    public static function newFactory()
    {
        return LanguageFactory::new();
    }
}
