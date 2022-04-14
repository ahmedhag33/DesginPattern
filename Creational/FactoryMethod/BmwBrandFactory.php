<?php

namespace Creational\FactoryMethod;

use Creational\FactoryMethod\BmwBrand;
use Creational\FactoryMethod\BrandFactory;

class BmwBrandFactory implements BrandFactory
{
    public function BulidBrand()
    {
        return new BmwBrand();
    }
}
