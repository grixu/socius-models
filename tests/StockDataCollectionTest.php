<?php

namespace Grixu\SociusModels\Tests;

use Grixu\SociusModels\Tests\Helpers\CollectionTest;
use Grixu\SociusModels\Warehouse\DataTransferObjects\StockDataCollection;
use Grixu\SociusModels\Warehouse\Factories\StockDataFactory;

class StockDataCollectionTest extends CollectionTest
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->obj = StockDataCollection::create(
            [
                StockDataFactory::new()->create()->toArray(),
                StockDataFactory::new()->create()->toArray(),
                StockDataFactory::new()->create()->toArray(),
            ]
        );
    }
}
