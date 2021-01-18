<?php

namespace Grixu\SociusModels\Operator\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObjectCollection;

/**
 * @method OperatorBranchData current
 */
class OperatorBranchDataCollection extends DataTransferObjectCollection
{
    public static function create(array $data): OperatorBranchDataCollection
    {
        return new static(OperatorBranchData::arrayOf($data));
    }
}
