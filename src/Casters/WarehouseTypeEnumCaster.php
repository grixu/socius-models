<?php

namespace Grixu\SociusModels\Casters;

use Grixu\SociusModels\Warehouse\Enums\WarehouseTypeEnum;
use Spatie\LaravelData\Casts\Cast;
use Spatie\LaravelData\Support\Creation\CreationContext;
use Spatie\LaravelData\Support\DataProperty;

class WarehouseTypeEnumCaster implements Cast
{
    public function cast(DataProperty $property, mixed $value, array $properties, CreationContext $context): WarehouseTypeEnum
    {
        if ($value instanceof WarehouseTypeEnum) {
            return $value;
        }

        return WarehouseTypeEnum::make($value);
    }
}
