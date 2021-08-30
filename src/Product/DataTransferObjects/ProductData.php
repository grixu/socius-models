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
    public string|null $ean;

    #[CastWith(ProductMeasureUnitEnumCaster::class)]
    public ProductMeasureUnitEnum|null $measureUnit;

    #[CastWith(ProductVatTypeEnumCaster::class)]
    public ProductVatTypeEnum|null $taxGroup;

    public int|null $taxValue;
    public float|null $weight;
    public int $xlId;

    #[CastWith(CarbonCaster::class)]
    public Carbon $syncTs;

    #[CastWith(CarbonCaster::class)]
    public Carbon $updatedAt;

    public bool $eshop = false;
    public bool|null $availability = null;
    public int|null $availabilityInDays = null;
    public string|null $availabilityInDaysInWords = null;
    public bool $attachments = false;
    public bool $archived = true;
    public bool $blocked = true;
    public int|null $flags;
    public float|int|null $price;
    public float|int|null $eshopPrice;
    public string|null $eshopUrl;

    #[CastWith(CarbonCaster::class)]
    public Carbon|null $priceUpdated;
}
