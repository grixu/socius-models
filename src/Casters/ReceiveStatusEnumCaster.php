<?php

namespace Grixu\SociusModels\Casters;

use Grixu\SociusModels\Order\Enums\ReceiveStatusEnum;
use Spatie\DataTransferObject\Caster;

class ReceiveStatusEnumCaster implements Caster
{
    public function cast(mixed $value): ReceiveStatusEnum
    {
        if ($value instanceof ReceiveStatusEnum) return $value;

        return ReceiveStatusEnum::make($value);
    }
}
