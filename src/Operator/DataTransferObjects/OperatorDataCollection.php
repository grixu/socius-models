<?php

namespace Grixu\SociusModels\Operator\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObjectCollection;

/**
 * @method OperatorData current
 */
class OperatorDataCollection extends DataTransferObjectCollection
{
    public static function create(array $data): OperatorDataCollection
    {
        return new static(OperatorData::arrayOf($data));
    }
}
