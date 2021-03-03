<?php

namespace Grixu\SociusModels\Tests\Warehouse;

use Grixu\SociusModels\Warehouse\Enums\WarehouseTypeEnum;
use Orchestra\Testbench\TestCase;

class WarehouseTypeEnumTest extends TestCase
{
    /** @test */
    public function is_returning_values()
    {
        $this->assertIsString(WarehouseTypeEnum::IVM()->value);
        $this->assertNotEquals('IVM', WarehouseTypeEnum::IVM()->value);
        $this->assertIsString(WarehouseTypeEnum::PSPG()->value);
        $this->assertNotEquals('PSPG', WarehouseTypeEnum::PSPG()->value);
        $this->assertIsString(WarehouseTypeEnum::DEPOSIT()->value);
        $this->assertNotEquals('self::DEPOSIT()', WarehouseTypeEnum::DEPOSIT()->value);
    }

}
