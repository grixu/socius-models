<?php

namespace Grixu\SociusModels\Tests\Helpers;

use Orchestra\Testbench\TestCase;

abstract class CollectionTest extends TestCase
{
    protected $obj;

    /** @test */
    public function creation_check()
    {
        $this->assertNotEmpty($this->obj);
        $this->assertCount(3, $this->obj);
    }
}
