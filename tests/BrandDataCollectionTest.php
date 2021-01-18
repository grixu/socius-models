<?php

namespace Grixu\SociusModels\Tests;

use Grixu\SociusModels\Product\DataTransferObjects\BrandDataCollection;
use Grixu\SociusModels\Product\Factories\BrandDataFactory;
use Grixu\SociusModels\Tests\Helpers\CollectionTest;

class BrandDataCollectionTest extends CollectionTest
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->obj = BrandDataCollection::create(
            [
                BrandDataFactory::new()->create()->toArray(),
                BrandDataFactory::new()->create()->toArray(),
                BrandDataFactory::new()->create()->toArray(),
            ]
        );
    }
}
