<?php

namespace Grixu\SociusModels\Product\DataTransferObjects;

use Illuminate\Support\Carbon;
use Spatie\DataTransferObject\DataTransferObject;

class CategoryData extends DataTransferObject
{
    public string $name;
    public Carbon $syncTs;
    public Carbon $updatedAt;
    public int $xlId;
    public ?int $xlParentId;
}
