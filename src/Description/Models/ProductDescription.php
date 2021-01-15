<?php

namespace Grixu\SociusModels\Description\Models;

use Grixu\SociusModels\Description\Factories\ProductDescriptionFactory;
use Grixu\SociusModels\Product\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Schema;

/**
 * @property \Illuminate\Support\Carbon sync_ts
 * @property int operator_id
 * @property string name
 * @property string desc
 * @property string page_title
 * @property string keywords
 * @property string short_desc
 * @property string meta_desc
 * @property string url
 * @property \Illuminate\Support\Carbon created_at
 * @property \Illuminate\Support\Carbon updated_at
 * @property \Illuminate\Support\Carbon|null last_modification
 * @property \Illuminate\Support\Carbon|null last_modification_desc
 * @property int xl_id
 * @property int language_id
 * @property int product_id
 */
class ProductDescription extends Model
{
    use HasFactory;

    public $timestamps = false;
    public $incrementing = true;

    protected $fillable = [
        'name',
        'desc',
        'page_title',
        'keywords',
        'short_desc',
        'meta_desc',
        'url',
        'last_modification',
        'last_modification_desc',
        'product_id',
        'language_id',
        'xl_id',
        'sync_ts',
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'name' => 'string',
        'desc' => 'string',
        'page_title' => 'string',
        'keywords' => 'string',
        'short_desc' => 'string',
        'meta_desc' => 'string',
        'url' => 'string',
        'xl_id' => 'string',
    ];

    protected $dates = [
        'last_modification',
        'last_modification_desc',
        'sync_ts',
        'updated_at',
    ];

    public function language(): BelongsTo
    {
        return $this->belongsTo(
            Language::class,
            'language_id',
            'id'
        );
    }

    public function product(): ?BelongsTo
    {
        if (Schema::hasTable('products')) {
            return $this->belongsTo(
                Product::class,
                'product_id',
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
