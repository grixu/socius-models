<?php

namespace Grixu\SociusModels\Description\DataTransferObjects;

use Grixu\RelationshipDataTransferObject\RelationshipDataTransferObject;
use Illuminate\Support\Carbon;

class LanguageData extends RelationshipDataTransferObject
{
    public string $name;
    public int $xlId;
    public Carbon $updatedAt;
}
