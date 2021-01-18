<?php

namespace Grixu\SociusModels\Description\Models;

use Grixu\SociusModels\Description\Factories\LanguageFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;

/**
 * @property string name
 * @property Carbon updatedAt
 * @property int xlId
 */
class Language extends Model
{
    use HasFactory;

    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';

    public $timestamps = false;
    public $incrementing = true;

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

    protected $dates = [
        'updatedAt',
    ];

    public function descriptions(): HasMany
    {
        return $this->hasMany(
            ProductDescription::class,
            'languageId',
            'id'
        );
    }

    public static function newFactory()
    {
        return LanguageFactory::new();
    }
}
