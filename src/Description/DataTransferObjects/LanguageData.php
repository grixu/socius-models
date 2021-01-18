<?php

namespace Grixu\SociusModels\Description\DataTransferObjects;

use Illuminate\Support\Carbon;
use Spatie\DataTransferObject\DataTransferObject;

class LanguageData extends DataTransferObject
{
    public string $name;
    public int $xlId;
    public Carbon $updatedAt;
}
