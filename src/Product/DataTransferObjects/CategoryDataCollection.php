<?php

namespace Grixu\SociusModels\Product\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObjectCollection;

/**
 * @method CategoryData current
 */
class CategoryDataCollection extends DataTransferObjectCollection
{
    public static function create(array $data): CategoryDataCollection
    {
        return new static(CategoryData::arrayOf($data));
    }
}
