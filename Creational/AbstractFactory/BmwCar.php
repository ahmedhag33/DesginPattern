<?php

namespace Creational\AbstractFactory;

use Creational\AbstractFactory\CarInterFace;

class BmwCar implements CarInterFace
{
    private $price;

    public function __construct($price)
    {
        $this->price = $price;
    }
    public function CalcultePrice()
    {
        return $this->price + 12000;
    }
}
