<?php

namespace Creational\ProtoType;

use Creational\ProtoType\AbstractCarProtoType;

class ManualCarProtoType extends AbstractCarProtoType
{
    protected $model = 'Manual';

    public function __clone()
    {
        //
    }
}
