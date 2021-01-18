<?php

namespace Grixu\SociusModels\Product\DataTransferObjects;

use Grixu\SociusModels\Product\Enums\ProductMeasureUnitEnum;
use Grixu\SociusModels\Product\Enums\ProductVatTypeEnum;
use Illuminate\Support\Carbon;
use Spatie\DataTransferObject\DataTransferObject;

class ProductData extends DataTransferObject
{
    public ?int $id;
    public string $name;
    public string $index;
    public string $ean;
    public ProductMeasureUnitEnum $measureUnit;
    public ProductVatTypeEnum $taxGroup;
    public int $taxValue;
    public float $weight;
    public int $xlId;
    public int $xlOperatorId;
    public ?int $brandId;
    public ?int $xlProductTypeId;
    public Carbon $syncTs;
    public Carbon $updatedAt;
    public bool $eshop=false;
    public bool $availability=false;
    public bool $attachments=false;
    public bool $archived=true;
    public bool $blocked=true;
    public ?int $flags;
    public ?ProductTypeData $productType;
    public ?BrandData $brand;
    public ?float $price;
    public ?float $eshopPrice;
    public ?Carbon $priceUpdated;
}
