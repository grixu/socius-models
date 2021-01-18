<?php

namespace Grixu\SociusModels\Tests;

use Grixu\SociusModels\Tests\Helpers\CollectionTest;
use Grixu\SociusModels\Warehouse\DataTransferObjects\WarehouseDataCollection;
use Grixu\SociusModels\Warehouse\Factories\WarehouseDataFactory;

class WarehouseDataCollectionTest extends CollectionTest
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->obj = WarehouseDataCollection::create(
            [
                WarehouseDataFactory::new()->create()->toArray(),
                WarehouseDataFactory::new()->create()->toArray(),
                WarehouseDataFactory::new()->create()->toArray(),
            ]
        );
    }
}
