<?php

namespace Grixu\SociusModels\Casters;

use Illuminate\Support\Carbon;
use Spatie\LaravelData\Casts\Cast;
use Spatie\LaravelData\Support\Creation\CreationContext;
use Spatie\LaravelData\Support\DataProperty;

class CarbonCaster implements Cast
{
    public function cast(DataProperty $property, mixed $value, array $properties, CreationContext $context): Carbon
    {
        return Carbon::createFromTimeString($value);
    }
}
