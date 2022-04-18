<?php

namespace Creational\StaticFactory;

class StaticFactory
{
    public static function factory(string $type)
    {
        if ($type === "Bmw") {
            return new BmwCar();
        } elseif ($type === "Benz") {
            return new BenzCar();
        }
        return null;
    }
}
