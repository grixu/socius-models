<?php

namespace Grixu\SociusModels\Customer\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObjectCollection;

/**
 * @method CustomerData current
 */
class CustomerDataCollection extends DataTransferObjectCollection
{
    public static function create(array $data): CustomerDataCollection
    {
        return new static(CustomerData::arrayOf($data));
    }
}
