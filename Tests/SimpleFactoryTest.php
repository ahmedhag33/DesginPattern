<?php

namespace Tests;

use Creational\SimpleFactory\Car;
use Creational\SimpleFactory\CarFactory;
use PHPUnit\Framework\TestCase;

class SimpleFactoryTest extends TestCase
{
    public function testCanCreateCar()
    {
        $factory = new CarFactory();
        $mycar = $factory->CreateCar('bmw');
        $this->assertInstanceOf(Car::class, $mycar);
    }
}
