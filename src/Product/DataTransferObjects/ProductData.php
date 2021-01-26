<?php

namespace Grixu\SociusModels\Product\DataTransferObjects;

use Grixu\SociusModels\Product\Enums\ProductMeasureUnitEnum;
use Grixu\SociusModels\Product\Enums\ProductVatTypeEnum;
use Illuminate\Support\Carbon;
use Spatie\DataTransferObject\DataTransferObject;
use Symfony\Component\VarDumper\Cloner\Data;

class ProductData extends DataTransferObject
{
    public string $name;
    public string $index;
    public string $ean;
    public ProductMeasureUnitEnum $measureUnit;
    public ProductVatTypeEnum $taxGroup;
    public int $taxValue;
    public float $weight;
    public int $xlId;
    public ?int $operatorId;
    public ?int $brandId;
    public ?int $productTypeId;
    public Carbon $syncTs;
    public Carbon $updatedAt;
    public bool $eshop=false;
    public bool $availability=false;
    public bool $attachments=false;
    public bool $archived=true;
    public bool $blocked=true;
    public ?int $flags;
    public ?float $price;
    public ?float $eshopPrice;
    public ?Carbon $priceUpdated;
}