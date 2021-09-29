<?php

namespace Grixu\SociusModels\Tests\Warehouse;

use Grixu\SociusDto\SociusDto;
use Grixu\SociusModels\Tests\Helpers\DataFactoryTestCase;
use Grixu\SociusModels\Warehouse\Factories\WarehouseDataFactory;

class WarehouseDataFactoryTest extends DataFactoryTestCase
{
    protected string $factory = WarehouseDataFactory::class;

    /** @test */
    public function caster_check()
    {
        $obj = $this->factory::new()->create([
        'type' => 'Depozyt',
    ]);

        $this->assertNotEmpty($obj);
        $this->assertInstanceOf(SociusDto::class, $obj);
    }
}
