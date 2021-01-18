<?php

namespace Grixu\SociusModels\Operator\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObjectCollection;

/**
 * @method OperatorRoleData current
 */
class OperatorRoleDataCollection extends DataTransferObjectCollection
{
    public static function create(array $data): OperatorRoleDataCollection
    {
        return new static(OperatorRoleData::arrayOf($data));
    }
}
