<?php

namespace Creational\ProtoType;

use Creational\ProtoType\AbstractCarProtoType;

class AutomaticCarProtoType extends AbstractCarProtoType
{
    protected $model = 'Automatic';

    public function __clone()
    {
        //
    }
}
