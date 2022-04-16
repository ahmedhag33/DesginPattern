<?php

namespace Creational\Pool;

class Car
{
    private $RentAt;

    public function __construct()
    {
        $this->RentAt = new \DateTime();
    }
    public function MoveCar()
    {
        return "Car is Moving";
    }
}
