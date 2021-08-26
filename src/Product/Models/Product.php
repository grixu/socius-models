<?php

namespace Grixu\SociusModels\Product\Models;

use Grixu\SociusModels\Description\Models\ProductDescription;
use Grixu\SociusModels\Product\Enums\ProductMeasureUnitEnum;
use Grixu\SociusModels\Product\Enums\ProductVatTypeEnum;
use Grixu\SociusModels\Product\Factories\ProductFactory;
use Grixu\SociusModels\Warehouse\Models\Stock;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Schema;

/**
 * @property string $name
 * @property string $index
 * @property string $ean
 * @property ProductMeasureUnitEnum $measure_unit
 * @property ProductVatTypeEnum $tax_group
 * @property int $tax_value
 * @property float $weight
 * @property float $price
 * @property bool $eshop
 * @property bool $availability
 * @property int $availability_in_days
 * @property string $availability_in_days_in_words
 * @property bool $attachments
 * @property bool $archived
 * @property bool $blocked
 * @property \Illuminate\Support\Carbon $sync_ts
 * @property \Illuminate\Support\Carbon $updated_at
 * @property int $xl_id
 * @property int $id
 * @property int $brand_id
 * @property Brand $brand
 * @property int $product_type_id
 * @property ProductType $productType
 * @property float $eshop_price
 * @property \Illuminate\Support\Carbon $price_updated
 * @property int $flags
 */
class Product extends Model
{
    use HasFactory;

    public const CREATED_AT = 'created_at';
    public const UPDATED_AT = 'updated_at';

    public $timestamps = false;

    protected $casts = [
        'name' => 'string',
        'index' => 'string',
        'ean' => 'string',
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
        'attachments' => 'boolean',
        'blocked' => 'boolean',
        'archived' => 'boolean',
        'eshop' => 'boolean',
    ];

    protected $dates = [
        'price_updated',
        'sync_ts',
        'updated_at',
        'created_at',
    ];

    protected $fillable = [
        'name',
        'index',
        'ean',
        'measure_unit',
        'tax_group',
        'tax_value',
        'eshop',
        'availability',
        'availability_in_days',
        'availability_in_days_in_words',
        'attachments',
        'blocked',
        'archived',
        'weight',
        'created_at',
        'updated_at',
        'sync_ts',
        'xl_id',
        'price',
        'eshop_price',
        'price_updated',
        'flags',
        'brand_id',
        'product_type_id',
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

    public static function newFactory()
    {
        return ProductFactory::new();
    }
}
