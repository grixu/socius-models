<?php

namespace Grixu\SociusModels\Tests;

use Grixu\SociusModels\Product\DataTransferObjects\ProductDataCollection;
use Grixu\SociusModels\Product\Factories\ProductDataFactory;
use Grixu\SociusModels\Tests\Helpers\CollectionTest;

class ProductDataCollectionTest extends CollectionTest
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->obj = ProductDataCollection::create(
            [
                ProductDataFactory::new()->create()->toArray(),
                ProductDataFactory::new()->create()->toArray(),
                ProductDataFactory::new()->create()->toArray(),
            ]
        );
    }
}
