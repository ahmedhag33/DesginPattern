<?php

namespace Creational\Bulider;

use Creational\Bulider\Models\Car;
use Creational\Bulider\CarBuliderInterFace;
use Creational\Bulider\Models\BmwCar;

class BmwCarBulider implements CarBuliderInterFace
{
    /**
     * @var Car $type
     */

    private $type;

    public function createCar()
    {
        $this->type = new BmwCar();
    }
    public function addBody()
    {
        $this->type->setPart('BODY', 'Bmwbody');
    }
    public function addDoors()
    {
        $this->type->setPart('DOOR', 'Bmwdoor');
    }
    public function addEngine()
    {
        $this->type->setPart('ENGINE', 'Bmwengine');
    }
    public function addWeel()
    {
        $this->type->setPart('WHEEL', 'Bmwwheel');
    }

    public function getCar(): Car
    {
        return $this->type;
    }
}
