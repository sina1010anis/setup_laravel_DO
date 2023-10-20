<?php

namespace App\Pattern\FactoryMethod\Core;
use App\Pattern\FactoryMethod\Interface\DBConnection;

class MysqlConnection implements DBConnection
{
    public function connect()
    {
        return 'Mysql Connect...!';
    }
}
