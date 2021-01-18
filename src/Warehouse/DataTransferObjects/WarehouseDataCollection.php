<?php

namespace Grixu\SociusModels\Warehouse\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObjectCollection;

/**
 * @method WarehouseData current
 */
class WarehouseDataCollection extends DataTransferObjectCollection
{
    public static function create(array $data): WarehouseDataCollection
    {
        return new static(WarehouseData::arrayOf($data));
    }
}
