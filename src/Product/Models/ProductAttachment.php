<?php

namespace Grixu\SociusModels\Product\Models;

use Grixu\SociusModels\Description\Models\Language;
use Grixu\SociusModels\Product\Factories\ProductAttachmentFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Schema;

/**
 * @property string $filename
 * @property string $type
 * @property Carbon $sync_ts
 * @property Carbon $updated_at
 * @property int $xl_id
 * @property int $id
 * @property int $product_id
 * @property Product $product
 * @property int|null $language_id
 * @property Language|null $language
 * @property Carbon $xl_updated_at
 */
class ProductAttachment extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $casts = [
        'filename' => 'string',
        'type' => 'string',
        'xl_id' => 'integer',
        'xl_updated_at' => 'immutable_datetime',
        'sync_ts' => 'immutable_datetime',
        'updated_at' => 'immutable_datetime',
    ];

    protected $fillable = [
        'filename',
        'type',
        'xl_updated_at',
        'sync_ts',
        'xl_id',
        'product_id',
        'language_id',
        'updated_at',
        'created_at',
    ];

    public function language(): ?BelongsTo
    {
        if (Schema::hasTable('languages')) {
            return $this->belongsTo(
                Language::class,
                'language_id',
                'id'
            );
        }

        return null;
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(
            Product::class,
            'product_id',
            'id'
        );
    }

    public static function newFactory()
    {
        return ProductAttachmentFactory::new();
    }
}
