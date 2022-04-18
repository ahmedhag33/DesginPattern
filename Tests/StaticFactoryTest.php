<?php

namespace Tests;

use Creational\StaticFactory\BenzCar;
use Creational\StaticFactory\BmwCar;
use Creational\StaticFactory\StaticFactory;
use PHPUnit\Framework\TestCase;

class StaticFactoryTest extends TestCase
{
    public function testCanBmwCar()
    {
        $this->assertInstanceOf(BmwCar::class, StaticFactory::factory('Bmw'));
    }
    public function testCanBenzCar()
    {
        $this->assertInstanceOf(BenzCar::class, StaticFactory::factory('Benz'));
    }
}
