<?php

namespace Grixu\SociusModels\Tests;

use Grixu\SociusModels\Description\DataTransferObjects\LanguageDataCollection;
use Grixu\SociusModels\Description\Factories\LanguageDataFactory;
use Grixu\SociusModels\Tests\Helpers\CollectionTest;

class LanguageDataCollectionTest extends CollectionTest
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->obj = LanguageDataCollection::create(
            [
                LanguageDataFactory::new()->create()->toArray(),
                LanguageDataFactory::new()->create()->toArray(),
                LanguageDataFactory::new()->create()->toArray(),
            ]
        );
    }
}
