<?php

namespace Grixu\SociusModels\Product\Enums;

use Spatie\Enum\Laravel\Enum;

/**
 * @method static self PRODUCT_TYPES()
 * @method static self BRANDS()
 */
final class DictionaryTypeEnum extends Enum
{
    protected static function values(): array
    {
        return [
            'PRODUCT_TYPES' => 'Rodzaje towarów',
            'BRANDS' => 'Marki towarów',
        ];
    }
}
