<?php

namespace Grixu\SociusModels\Product\Models;

use Grixu\SociusModels\Description\Models\ProductDescription;
use Grixu\SociusModels\Product\Enums\ProductMeasureUnitEnum;
use Grixu\SociusModels\Product\Enums\ProductVatTypeEnum;
use Grixu\SociusModels\Product\Factories\ProductFactory;
use Grixu\SociusModels\Warehouse\Models\Stock;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Schema;

/**
 * @property int $id
 * @property string $name
 * @property string $index
 * @property string $ean
 * @property ProductMeasureUnitEnum $measure_unit
 * @property ProductVatTypeEnum $tax_group
 * @property int $tax_value
 * @property float $weight
 * @property bool $blocked
 * @property bool $archived
 * @property bool $eshop
 * @property Carbon $sync_ts
 * @property int $xl_id
 * @property int $brand_id
 * @property Brand $brand
 * @property int $product_type_id
 * @property ProductType $productType
 * @property int $category_id
 * @property Category $category
 * @property int $flags
 * @property float $price
 * @property float $eshop_price
 * @property string $eshop_url
 * @property string $eshop_image
 * @property bool $availability
 * @property int $availability_in_days
 * @property string $availability_in_days_in_words
 * @property Carbon $updated_at
 * @property Collection $attachments
 */
class Product extends Model
{
    use HasFactory;

    public const CREATED_AT = 'created_at';
    public const UPDATED_AT = 'updated_at';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'index',
        'ean',
        'measure_unit',
        'tax_group',
        'tax_value',
        'weight',
        'blocked',
        'archived',
        'eshop',
        'sync_ts',
        'xl_id',
        'flags',
        'price',
        'price_updated',
        'eshop_price',
        'eshop_url',
        'eshop_image',
        'availability',
        'availability_in_days',
        'availability_in_days_in_words',
        'checksum',
        'created_at',
        'updated_at',
        'category_id',
        'brand_id',
        'product_type_id',
    ];

    protected $casts = [
        'measure_unit' => ProductMeasureUnitEnum::class,
        'tax_group' => ProductVatTypeEnum::class,
        'tax_value' => 'integer',
        'weight' => 'double',
        'xl_id' => 'integer',
        'price' => 'double',
        'eshop_price' => 'double',
        'flags' => 'integer',
        'availability' => 'boolean',
        'availability_in_days' => 'integer',
        'blocked' => 'boolean',
        'archived' => 'boolean',
        'eshop' => 'boolean',
        'sync_ts' => 'immutable_datetime',
        'updated_at' => 'immutable_datetime',
    ];

    public function brand(): BelongsTo
    {
        return $this->belongsTo(
            Brand::class,
            'brand_id',
            'id'
        );
    }

    public function productType(): BelongsTo
    {
        return $this->belongsTo(
            ProductType::class,
            'product_type_id',
            'id'
        );
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(
            Category::class,
            'category_id',
            'id'
        );
    }

    public function stocks(): ?HasMany
    {
        if (Schema::hasTable('stocks')) {
            return $this->hasMany(
                Stock::class,
                'product_id',
                'id'
            );
        }

        return null;
    }

    public function descriptions(): ?HasMany
    {
        if (Schema::hasTable('product_descriptions')) {
            return $this->hasMany(
                ProductDescription::class,
                'product_id',
                'id'
            );
        }

        return null;
    }

    public function attachments(): HasMany
    {
        return $this->hasMany(
            ProductAttachment::class,
            'product_id',
            'id'
        );
    }

    public static function newFactory()
    {
        return ProductFactory::new();
    }
}
