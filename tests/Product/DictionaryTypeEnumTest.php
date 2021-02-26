<?php

namespace Grixu\SociusModels\Tests\Product;

use Grixu\SociusModels\Product\Enums\DictionaryTypeEnum;
use Orchestra\Testbench\TestCase;

class DictionaryTypeEnumTest extends TestCase
{
    /** @test */
    public function is_returning_values()
    {
        $this->assertIsString(DictionaryTypeEnum::PRODUCT_TYPES()->value);
        $this->assertNotEquals('PRODUCT_TYPES', DictionaryTypeEnum::PRODUCT_TYPES()->value);
        $this->assertIsString(DictionaryTypeEnum::BRANDS()->value);
        $this->assertNotEquals('BRANDS', DictionaryTypeEnum::BRANDS()->value);
    }

}
