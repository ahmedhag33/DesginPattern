<?php

namespace Structural\Adapter;

class EngineAdapter implements EngineInterFace
{
    private $engine;

    public function __construct(TurboEngine $engine)
    {
        $this->engine = $engine;
    }

    public function StartEngine()
    {
       return $this->engine->StartTurbo();
    }
}
