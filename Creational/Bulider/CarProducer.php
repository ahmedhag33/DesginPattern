<?php

namespace Creational\Bulider;

use Creational\Bulider\CarBuliderInterFace;
use Creational\Bulider\Models\Car;

class CarProducer
{
    private $bulider;

    public function __construct(CarBuliderInterFace $bulider)
    {
        $this->bulider = $bulider;
    }
    public function ProducerCar(): Car
    {
        $this->bulider->createCar();
        $this->bulider->addBody();
        $this->bulider->addDoors();
        return $this->bulider->getCar();
    }
}
