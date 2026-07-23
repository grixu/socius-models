<?php

namespace Grixu\SociusModels\Casters;

use Grixu\SociusModels\Product\Enums\ProductVatTypeEnum;
use Spatie\LaravelData\Casts\Cast;
use Spatie\LaravelData\Support\Creation\CreationContext;
use Spatie\LaravelData\Support\DataProperty;

class ProductVatTypeEnumCaster implements Cast
{
    public function cast(DataProperty $property, mixed $value, array $properties, CreationContext $context): ProductVatTypeEnum
    {
        if ($value instanceof ProductVatTypeEnum) {
            return $value;
        }

        return ProductVatTypeEnum::make($value);
    }
}
