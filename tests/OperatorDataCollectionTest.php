<?php

namespace Grixu\SociusModels\Tests;

use Grixu\SociusModels\Operator\DataTransferObjects\OperatorDataCollection;
use Grixu\SociusModels\Operator\Factories\OperatorDataFactory;
use Grixu\SociusModels\Tests\Helpers\CollectionTest;

class OperatorDataCollectionTest extends CollectionTest
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->obj = OperatorDataCollection::create(
            [
                OperatorDataFactory::new()->create()->toArray(),
                OperatorDataFactory::new()->create()->toArray(),
                OperatorDataFactory::new()->create()->toArray(),
            ]
        );
    }
}
