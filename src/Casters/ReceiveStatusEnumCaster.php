<?php

namespace Grixu\SociusModels\Casters;

use Grixu\SociusModels\Order\Enums\ReceiveStatusEnum;
use Spatie\LaravelData\Casts\Cast;
use Spatie\LaravelData\Support\Creation\CreationContext;
use Spatie\LaravelData\Support\DataProperty;

class ReceiveStatusEnumCaster implements Cast
{
    public function cast(DataProperty $property, mixed $value, array $properties, CreationContext $context): ReceiveStatusEnum
    {
        if ($value instanceof ReceiveStatusEnum) {
            return $value;
        }

        return ReceiveStatusEnum::make($value);
    }
}
