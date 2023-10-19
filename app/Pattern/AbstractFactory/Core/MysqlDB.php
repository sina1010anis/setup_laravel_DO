<?php

namespace App\Pattern\AbstractFactory\Core;

use App\Pattern\AbstractFactory\Interface\AbsFactory;
use App\Pattern\AbstractFactory\Interface\ISelect;
use App\Pattern\AbstractFactory\Interface\IUpdate;
use App\Pattern\AbstractFactory\Select\MysqlSelect;
use App\Pattern\AbstractFactory\Update\MysqlUpdate;

class MysqlDB implements AbsFactory
{
    public function createSelect () : ISelect
    {
        return new MysqlSelect();
    }
    public function createUpdate () : IUpdate
    {
        return new MysqlUpdate();
    }
}
