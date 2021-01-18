<?php

namespace Grixu\SociusModels\Tests;

use Grixu\SociusModels\Description\DataTransferObjects\ProductDescriptionDataCollection;
use Grixu\SociusModels\Description\Factories\ProductDescriptionDataFactory;
use Grixu\SociusModels\Tests\Helpers\CollectionTest;

class ProductDescriptionDataCollectionTest extends CollectionTest
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->obj = ProductDescriptionDataCollection::create(
            [
                ProductDescriptionDataFactory::new()->create()->toArray(),
                ProductDescriptionDataFactory::new()->create()->toArray(),
                ProductDescriptionDataFactory::new()->create()->toArray(),
            ]
        );
    }
}
