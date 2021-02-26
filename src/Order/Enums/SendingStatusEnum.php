<?php

namespace Grixu\SociusModels\Order\Enums;

use Spatie\Enum\Laravel\Enum;

/**
 * @method static self OPENED()
 * @method static self CLOSED()
 * @method static self SYNCED()
 */
final class SendingStatusEnum extends Enum
{
    protected static function values(): array
    {
        return [
            'OPENED' => 1,
            'CLOSED' => 2,
            'SYNCED' => 3,
        ];
    }
}
