<?php

namespace App\Pattern\AbstractFactory\Core;

use App\Pattern\AbstractFactory\Interface\ISelect;
use App\Pattern\AbstractFactory\Interface\IUpdate;
use App\Pattern\AbstractFactory\Interface\AbsFactory;
use App\Pattern\AbstractFactory\Select\MongoDBSelect;
use App\Pattern\AbstractFactory\Update\MongoDBUpdate;

class MongoDB implements AbsFactory
{
    public function createSelect () : ISelect
    {
        return new MongoDBSelect();
    }
    public function createUpdate () : IUpdate
    {
        return new MongoDBUpdate();
    }
}
