<?php

namespace Grixu\SociusModels\Casters;

use Grixu\SociusModels\Warehouse\Enums\WarehouseTypeEnum;
use Spatie\DataTransferObject\Caster;

class WarehouseTypeEnumCaster implements Caster
{
    public function cast(mixed $value): WarehouseTypeEnum
    {
        if ($value instanceof WarehouseTypeEnum) {
            return $value;
        }

        return WarehouseTypeEnum::make($value);
    }
}
