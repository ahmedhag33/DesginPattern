<?php

namespace Creational\Bulider;

use Creational\Bulider\CarBuliderInterFace;
use Creational\Bulider\Models\BenzCar;
use Creational\Bulider\Models\Car;

class BenzCarBulider implements CarBuliderInterFace
{
    /**
     * @var Car $type
     */

    private $type;

    public function createCar()
    {
        $this->type = new BenzCar();
    }
    public function addBody()
    {
        $this->type->setPart('BODY', 'body');
    }
    public function addDoors()
    {
        $this->type->setPart('DOOR', 'door');
    }
    public function addEngine()
    {
        $this->type->setPart('ENGINE', 'engine');
    }
    public function addWeel()
    {
        $this->type->setPart('WHEEL', 'wheel');
    }

    public function getCar() : Car
    {
        return $this->type;
    }
}
