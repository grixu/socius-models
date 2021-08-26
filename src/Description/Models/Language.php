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

    public const CREATED_AT = 'created_at';
    public const UPDATED_AT = 'updated_at';

    public $timestamps = false;
    public $incrementing = true;

    protected $fillable = [
        'name',
        'xl_id',
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'name' => 'string',
        'xl_id' => 'integer',
    ];

    protected $dates = [
        'updated_at',
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
