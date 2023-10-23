<?php

namespace App\Pattern\SimpelFactory\Core;
use App\Pattern\SimpelFactory\interface\ConnectionDB;

class MongoDB implements ConnectionDB
{
    public function connection()
    {
        return 'Connected MongoDB ...!';
    }
}
