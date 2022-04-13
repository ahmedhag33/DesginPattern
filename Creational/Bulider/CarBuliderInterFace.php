<?php

namespace Creational\Bulider;

use Creational\Bulider\Models\Car;

interface CarBuliderInterFace
{
    public function createCar();

    public function addEngine();

    public function addDoors();

    public function addBody();

    public function addWeel();

    public function getCar() : Car;
}
