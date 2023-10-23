<?php

namespace App\Pattern\SimpelFactory\Core;
use App\Pattern\SimpelFactory\interface\ConnectionDB;
use App\Pattern\SimpelFactory\interface\FactoryDBInterface;
use Exception;

class FactoryDB implements FactoryDBInterface
{
    public function factory(string $type) : ConnectionDB|string
    {
        if ($type == 'Mysql') {
            return new Mysql();
        } if ($type == 'MongoDB') {
            return new MongoDB();
        } else {
            return 'Error = DB not found...!';
        }
    }
}
