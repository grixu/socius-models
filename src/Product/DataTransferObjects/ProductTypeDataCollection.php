<?php

namespace Grixu\SociusModels\Product\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObjectCollection;

/**
 * @method ProductTypeData current
 */
class ProductTypeDataCollection extends DataTransferObjectCollection
{
    public static function create(array $data): ProductTypeDataCollection
    {
        return new static(ProductTypeData::arrayOf($data));
    }
}
