<?php

namespace Grixu\SociusModels\Tests;

use Grixu\SociusModels\Product\DataTransferObjects\CategoryDataCollection;
use Grixu\SociusModels\Product\Factories\CategoryDataFactory;
use Grixu\SociusModels\Tests\Helpers\CollectionTest;

class CategoryDataCollectionTest extends CollectionTest
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->obj = CategoryDataCollection::create(
            [
                CategoryDataFactory::new()->create()->toArray(),
                CategoryDataFactory::new()->create()->toArray(),
                CategoryDataFactory::new()->create()->toArray(),
            ]
        );
    }
}
