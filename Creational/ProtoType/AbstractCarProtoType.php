<?php

namespace Creational\ProtoType;

abstract class AbstractCarProtoType
{
    protected $model;

    private $flag;

    abstract function __clone();

    public function getFlag()
    {
        return $this->flag;
    }
    public function setFlag($flag)
    {
        $this->flag = $flag;
    }
}
