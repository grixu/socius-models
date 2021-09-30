<?php

namespace Grixu\SociusModels\Description\Models;

use Grixu\SociusModels\Description\Factories\ProductDescriptionFactory;
use Grixu\SociusModels\Product\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Schema;

/**
 * @property Carbon $sync_ts
 * @property string $name
 * @property string $desc
 * @property string $page_title
 * @property string $keywords
 * @property string $short_desc
 * @property string $meta_desc
 * @property string $url
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Carbon|null $last_modification
 * @property Carbon|null $last_modification_desc
 * @property int $xl_id
 * @property int $language_id
 * @property int $product_id
 */
class ProductDescription extends Model
{
    use HasFactory;

    public $timestamps = true;

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
        'xl_id' => 'string',
        'sync_ts' => 'immutable_datetime',
        'updated_at' => 'immutable_datetime',
        'last_modification' => 'immutable_datetime',
        'last_modification_desc' => 'immutable_datetime',
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
