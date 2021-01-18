<?php

namespace Grixu\SociusModels\Tests;

use Grixu\SociusModels\Operator\DataTransferObjects\OperatorBranchDataCollection;
use Grixu\SociusModels\Operator\Factories\OperatorBranchDataFactory;
use Grixu\SociusModels\Tests\Helpers\CollectionTest;

class OperatorBranchDataCollectionTest extends CollectionTest
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->obj = OperatorBranchDataCollection::create(
            [
                OperatorBranchDataFactory::new()->create()->toArray(),
                OperatorBranchDataFactory::new()->create()->toArray(),
                OperatorBranchDataFactory::new()->create()->toArray(),
            ]
        );
    }
}
