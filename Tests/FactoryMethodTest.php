<?php

namespace Tests;

use Creational\FactoryMethod\BenzBrand;
use Creational\FactoryMethod\BenzBrandFactory;
use Creational\FactoryMethod\BmwBrand;
use Creational\FactoryMethod\BmwBrandFactory;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
    public function testCanBulidBmwBrand()
    {
        $BrandFactory = new BmwBrandFactory();
        $mybrand = $BrandFactory->BulidBrand();
        $this->assertInstanceOf(BmwBrand::class, $mybrand);
    }
    public function testCanBulidBenzBrand()
    {
        $BrandFactory = new BenzBrandFactory();
        $mybrand = $BrandFactory->BulidBrand();
        $this->assertInstanceOf(BenzBrand::class, $mybrand);
    }
}
