<?php

namespace Structural\Adapter;

class Car
{
    private $engine;

    public function __construct(EngineInterFace $engine)
    {
        $this->engine = $engine;
    }
    public function start()
    {
        return $this->engine->StartEngine();
    }
}
