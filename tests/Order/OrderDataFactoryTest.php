<?php

namespace Grixu\SociusModels\Tests\Order;

use Grixu\SociusDto\SociusDto;
use Grixu\SociusModels\Order\Factories\OrderDataFactory;
use Grixu\SociusModels\Tests\Helpers\DataFactoryTestCase;

class OrderDataFactoryTest extends DataFactoryTestCase
{
    protected string $factory = OrderDataFactory::class;

    /** @test */
    public function caster_check()
    {
        $obj = $this->factory::new()->create([
        'receiveStatus' => 0,
    ]);

        $this->assertNotEmpty($obj);
        $this->assertInstanceOf(SociusDto::class, $obj);
    }
}
