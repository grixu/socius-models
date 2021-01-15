<?php

namespace Grixu\SociusModels\Warehouse\Enums;

use Spatie\Enum\Laravel\Enum;

/**
 * @method static self UNLOCKED()
 * @method static self STOCKTAKING_TOTAL()
 * @method static self STOCKTAKING_PARTIAL()
 * @method static self DEPRECIATION()
 * @method static self MANUALLY()
 */
class WarehouseLockEnum extends Enum
{
    protected static function values(): array
    {
        return [
            'UNLOCKED' => '0',
            'STOCKTAKING_TOTAL' => '1',
            'STOCKTAKING_PARTIAL' => '2',
            'DEPRECIATION' => '11',
            'MANUALLY' => '21',
        ];
    }
}
