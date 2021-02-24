<?php

namespace Grixu\SociusModels\Description\Models;

use Grixu\SociusModels\Description\Factories\ProductDescriptionFactory;
use Grixu\SociusModels\Product\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Schema;

/**
 * @property \Illuminate\Support\Carbon syncTs
 * @property string name
 * @property string desc
 * @property string pageTitle
 * @property string keywords
 * @property string shortDesc
 * @property string metaDesc
 * @property string url
 * @property \Illuminate\Support\Carbon createdAt
 * @property \Illuminate\Support\Carbon updatedAt
 * @property \Illuminate\Support\Carbon|null lastModification
 * @property \Illuminate\Support\Carbon|null lastModificationDesc
 * @property int xlId
 * @property int languageId
 * @property int productId
 */
class ProductDescription extends Model
{
    use HasFactory;

    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';

    public $timestamps = false;
    public $incrementing = true;

    protected $fillable = [
        'name',
        'desc',
        'pageTitle',
        'keywords',
        'shortDesc',
        'metaDesc',
        'url',
        'lastModification',
        'lastModificationDesc',
        'productId',
        'languageId',
        'xlId',
        'syncTs',
        'createdAt',
        'updatedAt',
    ];

    protected $casts = [
        'name' => 'string',
        'desc' => 'string',
        'pageTitle' => 'string',
        'keywords' => 'string',
        'shortDesc' => 'string',
        'metaDesc' => 'string',
        'url' => 'string',
        'xlId' => 'string',
    ];

    protected $dates = [
        'lastModification',
        'lastModificationDesc',
        'syncTs',
        'updatedAt',
    ];

    public function language(): BelongsTo
    {
        return $this->belongsTo(
            Language::class,
            'languageId',
            'id'
        );
    }

    public function product(): ?BelongsTo
    {
        if (Schema::hasTable('products')) {
            return $this->belongsTo(
                Product::class,
                'productId',
                'id'
            );
        }

        return null;
    }

    public static function newFactory()
    {
        return ProductDescriptionFactory::new();
    }
}
