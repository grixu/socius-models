<?php

namespace Grixu\SociusModels\Tests\Helpers;

use Grixu\RelationshipDataTransferObject\RelationshipDataTransferObject;
use Orchestra\Testbench\TestCase;

abstract class DataFactoryTestCase extends TestCase
{
    protected string $factory;

    /** @test */
    public function creation_check()
    {
        $obj = $this->factory::new();

        $this->assertNotEmpty($obj);
        $this->assertEquals($this->factory, get_class($obj));
    }

    /** @test */
    public function created_obj_test()
    {
        $obj = $this->factory::new()->create();

        $this->assertNotEmpty($obj);
        $this->assertInstanceOf(RelationshipDataTransferObject::class, $obj);
    }
}
