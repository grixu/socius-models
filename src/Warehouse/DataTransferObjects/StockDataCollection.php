<?php

namespace Grixu\SociusModels\Warehouse\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObjectCollection;

/**
 * @method StockData current
 */
class StockDataCollection extends DataTransferObjectCollection
{
    public static function create(array $data): StockDataCollection
    {
        return new static(StockData::arrayOf($data));
    }
}
