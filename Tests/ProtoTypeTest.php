<?php

namespace Tests;

use Creational\ProtoType\AutomaticCarProtoType;
use Creational\ProtoType\ManualCarProtoType;
use PHPUnit\Framework\TestCase;

class ProtoTypeTest extends TestCase
{
    public function testCanCreateAutoMaticCarWithClone()
    {
        $ProtoTypeCar = new AutomaticCarProtoType();
        for ($index = 1; $index <= 10; $index++) {
            $NewCar = clone $ProtoTypeCar;
            $this->assertInstanceOf(AutomaticCarProtoType::class, $NewCar);
        }
    }
    public function testCanCreateManualCarWithClone()
    {
        $ProtoTypeCar = new ManualCarProtoType();
        for ($index = 1; $index <= 10; $index++) {
            $NewCar = clone $ProtoTypeCar;
            $this->assertInstanceOf(ManualCarProtoType::class, $NewCar);
        }
    }
}
