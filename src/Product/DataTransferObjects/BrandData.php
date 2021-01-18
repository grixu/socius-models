<?php

namespace Grixu\SociusModels\Product\DataTransferObjects;

use Carbon\Carbon;
use Spatie\DataTransferObject\DataTransferObject;

class BrandData  extends DataTransferObject
{
    public string $name;
    public Carbon $updatedAt;
    public int $xlId;
}
