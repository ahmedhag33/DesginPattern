<?php

namespace Creational\AbstractFactory;

use Creational\AbstractFactory\CarInterFace;

class BenzCar implements CarInterFace
{
    private $price;

    private $tax;

    public function __construct($price, $tax)
    {
        $this->price = $price;
        $this->tax = $tax;
    }
    public function CalcultePrice()
    {
        return $this->price + $this->tax + 2000;
    }
}
