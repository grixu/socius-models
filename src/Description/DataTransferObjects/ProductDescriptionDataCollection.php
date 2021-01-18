<?php

namespace Grixu\SociusModels\Description\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObjectCollection;

/**
 * @method ProductDescriptionData current
 */
class ProductDescriptionDataCollection extends DataTransferObjectCollection
{
    public static function create(array $data): ProductDescriptionDataCollection
    {
        return new static(ProductDescriptionData::arrayOf($data));
    }
}
