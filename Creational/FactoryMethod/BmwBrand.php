<?php

namespace Creational\FactoryMethod;

use Creational\FactoryMethod\CarBrandInterFace;

class BmwBrand implements CarBrandInterFace
{
    public function CreateBrand()
    {
        return "Bmw Brand";
    }
}
