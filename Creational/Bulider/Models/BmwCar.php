<?php

namespace Creational\Bulider\Models;

use Creational\Bulider\Models\Car;

class BmwCar extends Car
{
    private $data = [];

    public function setPart($name, $value)
    {
        $this->data[$name] = $value;
    }
}
