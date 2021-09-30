<?php

namespace Grixu\SociusModels\Tests\Product;

use Grixu\SociusDto\SociusDto;
use Grixu\SociusModels\Product\Factories\ProductDataFactory;
use Grixu\SociusModels\Tests\Helpers\DataFactoryTestCase;

class ProductDataFactoryTest extends DataFactoryTestCase
{
    protected string $factory = ProductDataFactory::class;

    /** @test */
    public function caster_check()
    {
        $obj = $this->factory::new()->create([
        'measureUnit' => 'SZT',
        'taxGroup' => 'A',
    ]);

        $this->assertNotEmpty($obj);
        $this->assertInstanceOf(SociusDto::class, $obj);
    }
}
