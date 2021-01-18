<?php

namespace Grixu\SociusModels\Tests;

use Grixu\SociusModels\Product\DataTransferObjects\ProductTypeDataCollection;
use Grixu\SociusModels\Product\Factories\ProductTypeDataFactory;
use Grixu\SociusModels\Tests\Helpers\CollectionTest;

class ProductTypeDataCollectionTest extends CollectionTest
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->obj = ProductTypeDataCollection::create(
            [
                ProductTypeDataFactory::new()->create()->toArray(),
                ProductTypeDataFactory::new()->create()->toArray(),
                ProductTypeDataFactory::new()->create()->toArray(),
            ]
        );
    }
}
