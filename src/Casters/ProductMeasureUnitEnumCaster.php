<?php

namespace Grixu\SociusModels\Casters;

use Grixu\SociusModels\Product\Enums\ProductMeasureUnitEnum;
use Spatie\DataTransferObject\Caster;

class ProductMeasureUnitEnumCaster implements Caster
{
    public function cast(mixed $value): ProductMeasureUnitEnum
    {
        if ($value instanceof ProductMeasureUnitEnum) {
            return $value;
        }

        return ProductMeasureUnitEnum::make($value);
    }
}
