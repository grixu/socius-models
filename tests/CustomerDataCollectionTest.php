<?php

namespace Grixu\SociusModels\Tests;

use Grixu\SociusModels\Customer\DataTransferObjects\CustomerDataCollection;
use Grixu\SociusModels\Customer\Factories\CustomerDataFactory;
use Grixu\SociusModels\Tests\Helpers\CollectionTest;

class CustomerDataCollectionTest extends CollectionTest
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->obj = CustomerDataCollection::create(
            [
                CustomerDataFactory::new()->create()->toArray(),
                CustomerDataFactory::new()->create()->toArray(),
                CustomerDataFactory::new()->create()->toArray(),
            ]
        );
    }
}
