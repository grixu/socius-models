<?php

namespace Grixu\SociusModels\Operator\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObjectCollection;

/**
 * @method BranchData current
 */
class BranchDataCollection extends DataTransferObjectCollection
{
    public static function create(array $data): BranchDataCollection
    {
        return new static(BranchData::arrayOf($data));
    }
}
