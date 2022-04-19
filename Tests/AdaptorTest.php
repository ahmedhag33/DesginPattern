<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Structural\Adapter\Car;
use Structural\Adapter\EngineAdapter;
use Structural\Adapter\NormalEngine;
use Structural\Adapter\TurboEngine;

class AdaptorTest extends TestCase
{
    public function testCanStartNormalEngine()
    {
        $engine = new NormalEngine();
        $car = new Car($engine);
        $this->assertEquals('Normal Engine Start', $car->start());
    }
    public function testCanStartTurboEngine()
    {
        $engine = new TurboEngine();
        $adaptor = new EngineAdapter($engine);
        $car = new Car($adaptor);
        $this->assertEquals('Turbo Engine Start', $car->start());
    }
}
