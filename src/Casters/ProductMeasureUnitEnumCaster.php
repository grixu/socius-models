<?php

namespace Grixu\SociusModels\Casters;

use Grixu\SociusModels\Product\Enums\ProductMeasureUnitEnum;
use Spatie\LaravelData\Casts\Cast;
use Spatie\LaravelData\Support\Creation\CreationContext;
use Spatie\LaravelData\Support\DataProperty;

class ProductMeasureUnitEnumCaster implements Cast
{
    public function cast(DataProperty $property, mixed $value, array $properties, CreationContext $context): ProductMeasureUnitEnum
    {
        if ($value instanceof ProductMeasureUnitEnum) {
            return $value;
        }

        return ProductMeasureUnitEnum::make($value);
    }
}
