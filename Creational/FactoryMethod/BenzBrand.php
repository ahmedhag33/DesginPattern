<?php

namespace Creational\FactoryMethod;

use Creational\FactoryMethod\CarBrandInterFace;

class BenzBrand  implements CarBrandInterFace
{
    public function CreateBrand()
    {
        return "Benz Brand";
    }
}

