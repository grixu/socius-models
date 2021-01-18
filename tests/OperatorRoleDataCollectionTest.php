<?php

namespace Grixu\SociusModels\Tests;

use Grixu\SociusModels\Operator\DataTransferObjects\OperatorRoleDataCollection;
use Grixu\SociusModels\Operator\Factories\OperatorRoleDataFactory;
use Grixu\SociusModels\Tests\Helpers\CollectionTest;

class OperatorRoleDataCollectionTest extends CollectionTest
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->obj = OperatorRoleDataCollection::create(
            [
                OperatorRoleDataFactory::new()->create()->toArray(),
                OperatorRoleDataFactory::new()->create()->toArray(),
                OperatorRoleDataFactory::new()->create()->toArray(),
            ]
        );
    }
}
