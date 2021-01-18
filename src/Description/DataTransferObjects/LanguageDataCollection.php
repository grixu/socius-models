<?php

namespace Grixu\SociusModels\Description\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObjectCollection;

/**
 * @method LanguageData current
 */
class LanguageDataCollection extends DataTransferObjectCollection
{
    public static function create(array $data): LanguageDataCollection
    {
        return new static(LanguageData::arrayOf($data));
    }
}
