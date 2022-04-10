<?php

namespace Creational\AbstractFactory;

use Creational\AbstractFactory\BmwCar;
use Creational\AbstractFactory\BenzCar;

class CarAbstractFactory
{
    private $tax = 100000;

    private $price;

    public function __construct($price)
    {
        $this->price = $price;
    }
    public function CreateBmwCar()
    {
        return new BmwCar($this->price);
    }
    public function CreateBenzCar()
    {
        return new BenzCar($this->price, $this->tax);
    }
}
