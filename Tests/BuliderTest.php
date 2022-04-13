<?php

namespace Tests;

use Creational\Bulider\BenzCarBulider;
use Creational\Bulider\BmwCarBulider;
use Creational\Bulider\CarProducer;
use Creational\Bulider\Models\BenzCar;
use Creational\Bulider\Models\BmwCar;
use PHPUnit\Framework\TestCase;

class BuliderTest extends TestCase
{
    public function testProducerBmwCar()
    {
        $Bulider = new BmwCarBulider();
        $CarProducer = new CarProducer($Bulider);
        $myCar = $CarProducer->ProducerCar();
        $this->assertInstanceOf(BmwCar::class, $myCar);
    }
    public function testProducerBenzCar()
    {
        $Bulider = new BenzCarBulider();
        $CarProducer = new CarProducer($Bulider);
        $myCar = $CarProducer->ProducerCar();
        $this->assertInstanceOf(BenzCar::class, $myCar);
    }
}
