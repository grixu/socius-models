<?php

namespace Grixu\SociusModels\Casters;

use Grixu\SociusModels\Product\Enums\ProductVatTypeEnum;
use Spatie\DataTransferObject\Caster;

class ProductVatTypeEnumCaster implements Caster
{
    public function cast(mixed $value): ProductVatTypeEnum
    {
        if ($value instanceof ProductVatTypeEnum) {
            return $value;
        }

        return ProductVatTypeEnum::make($value);
    }
}
