<?php

namespace Grixu\SociusModels\Order\Enums;

use Spatie\Enum\Laravel\Enum;

/**
 * @method static self WAITING_FOR_ADD()
 * @method static self ADDED()
 * @method static self SYNCED()
 * @method static self FAILED()
 */
final class ReceiveStatusEnum extends Enum
{
    protected static function values(): array
    {
        return [
            'WAITING_FOR_ADD' => 0,
            'ADDED' => 1,
            'SYNCED' => 2,
            'FAILED' => 3,
        ];
    }
}
