<?php

namespace Grixu\SociusModels\Product\DataTransferObjects;

use Grixu\SociusDto\SociusDto;
use Grixu\SociusModels\Casters\CarbonCaster;
use Grixu\SociusModels\Casters\ProductMeasureUnitEnumCaster;
use Grixu\SociusModels\Casters\ProductVatTypeEnumCaster;
use Grixu\SociusModels\Product\Enums\ProductMeasureUnitEnum;
use Grixu\SociusModels\Product\Enums\ProductVatTypeEnum;
use Illuminate\Support\Carbon;
use Spatie\DataTransferObject\Attributes\CastWith;

class ProductData extends SociusDto
{
    public string $name;
    public string $index;
    public string $ean;

    #[CastWith(ProductMeasureUnitEnumCaster::class)]
    public ProductMeasureUnitEnum $measureUnit;

    #[CastWith(ProductVatTypeEnumCaster::class)]
    public ProductVatTypeEnum $taxGroup;

    public int $taxValue;
    public float $weight;
    public int $xlId;

    #[CastWith(CarbonCaster::class)]
    public Carbon $syncTs;

    #[CastWith(CarbonCaster::class)]
    public Carbon $updatedAt;

    public bool $eshop=false;
    public bool $availability=false;
    public bool $attachments=false;
    public bool $archived=true;
    public bool $blocked=true;
    public int|null $flags;
    public float|int|null $price;
    public float|int|null $eshopPrice;

    #[CastWith(CarbonCaster::class)]
    public Carbon|null $priceUpdated;
}
