<?php

namespace App\Pattern\AbstractFactory\Core;

use App\Pattern\AbstractFactory\Interface\ISelect;
use App\Pattern\AbstractFactory\Interface\IUpdate;
use App\Pattern\AbstractFactory\Interface\AbsFactory;
use App\Pattern\AbstractFactory\Select\ElasticSelect;
use App\Pattern\AbstractFactory\Update\ElasticUpdate;

class ElasticDB implements AbsFactory
{
    public function createSelect () : ISelect
    {
        return new ElasticSelect();
    }
    public function createUpdate () : IUpdate
    {
        return new ElasticUpdate();
    }
}
