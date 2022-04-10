<?php

namespace Tests;

use Creational\AbstractFactory\BenzCar;
use Creational\AbstractFactory\BmwCar;
use Creational\AbstractFactory\CarAbstractFactory;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
    public function testCreateBmwCar()
    {
        $carfactory = new CarAbstractFactory(200000);
        $mycar = $carfactory->CreateBmwCar();
       // $this->assertInstanceOf(BmwCar::class, $mycar);
    }
    public function testCreateBenzCar()
    {
        $carfactory = new CarAbstractFactory(200000);
        $mycar = $carfactory->CreateBenzCar();
       // $this->assertInstanceOf(BenzCar::class, $mycar);
    }
}
