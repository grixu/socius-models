<?php

namespace Grixu\SociusModels\Tests;

use Grixu\SociusModels\Operator\DataTransferObjects\BranchDataCollection;
use Grixu\SociusModels\Operator\Factories\BranchDataFactory;
use Grixu\SociusModels\Tests\Helpers\CollectionTest;

class BranchDataCollectionTest extends CollectionTest
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->obj = BranchDataCollection::create(
            [
                BranchDataFactory::new()->create()->toArray(),
                BranchDataFactory::new()->create()->toArray(),
                BranchDataFactory::new()->create()->toArray(),
            ]
        );
    }
}
