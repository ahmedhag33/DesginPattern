<?php

namespace Creational\FactoryMethod;

use Creational\FactoryMethod\BenzBrand;
use Creational\FactoryMethod\BrandFactory;

class BenzBrandFactory implements BrandFactory
{
    public function BulidBrand()
    {
        return new BenzBrand();
    }
}
