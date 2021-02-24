<?php

namespace Grixu\SociusModels\Product\Models;

use Grixu\SociusModels\Description\Models\ProductDescription;
use Grixu\SociusModels\Operator\Models\Operator;
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
 * @property string name
 * @property string index
 * @property string ean
 * @property ProductMeasureUnitEnum measureUnit
 * @property ProductVatTypeEnum taxGroup
 * @property int taxValue
 * @property double weight
 * @property double price
 * @property bool eshop
 * @property bool availability
 * @property bool attachments
 * @property bool archived
 * @property bool blocked
 * @property \Illuminate\Support\Carbon syncTs
 * @property \Illuminate\Support\Carbon updatedAt
 * @property int xlId
 * @property int id
 * @property int brandId
 * @property Brand brand
 * @property int productTypeId
 * @property ProductType productType
 * @property double eshopPrice
 * @property \Illuminate\Support\Carbon priceUpdated
 * @property int flags
 */
class Product extends Model
{
    use HasFactory;

    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';

    public $timestamps = false;

    protected $casts = [
        'name' => 'string',
        'index' => 'string',
        'ean' => 'string',
        'measureUnit' => ProductMeasureUnitEnum::class,
        'taxGroup' => ProductVatTypeEnum::class,
        'taxValue' => 'integer',
        'weight' => 'double',
        'xlId' => 'integer',
        'price' => 'double',
        'eshopPrice' => 'double',
        'flags' => 'integer',
        'availability' => 'boolean',
        'attachments' => 'boolean',
        'blocked' => 'boolean',
        'archived' => 'boolean',
        'eshop' => 'boolean',
    ];

    protected $dates = [
        'priceUpdated',
        'syncTs',
        'updatedAt',
        'createdAt'
    ];

    protected $fillable = [
        'name',
        'index',
        'ean',
        'measureUnit',
        'taxGroup',
        'taxValue',
        'eshop',
        'availability',
        'attachments',
        'blocked',
        'archived',
        'weight',
        'createdAt',
        'updatedAt',
        'syncTs',
        'xlId',
        'price',
        'eshopPrice',
        'priceUpdated',
        'flags',
        'brandId',
        'productTypeId',
    ];

    public function brand(): BelongsTo
    {
        return $this->belongsTo(
            Brand::class,
            'brandId',
            'id'
        );
    }

    public function productType(): BelongsTo
    {
        return $this->belongsTo(
            ProductType::class,
            'productTypeId',
            'id'
        );
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(
            Category::class,
            'categoryId',
            'id'
        );
    }

    public function stocks(): ?HasMany
    {
        if (Schema::hasTable('stocks')) {
            return $this->hasMany(
                Stock::class,
                'productId',
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
                'productId',
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
