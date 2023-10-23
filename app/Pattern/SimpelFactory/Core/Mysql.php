<?php

namespace App\Pattern\SimpelFactory\Core;
use App\Pattern\SimpelFactory\interface\ConnectionDB;

class Mysql implements ConnectionDB
{
    public function connection()
    {
        return 'Connected Mysql ...!';
    }
}
