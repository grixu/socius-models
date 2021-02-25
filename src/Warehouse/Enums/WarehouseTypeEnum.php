<?php

namespace Grixu\SociusModels\Warehouse\Enums;

use Spatie\Enum\Laravel\Enum;

/**
 * @method static self DEPOSIT()
 * @method static self PSPG()
 * @method static self IVM()
 */
class WarehouseTypeEnum extends Enum
{
    protected static function values(): array
    {
        return [
            'DEPOSIT' => 'Depozyt',
            'PSPG' => '',
            'IVM' => 'Szafa IVM',
        ];
    }
}
