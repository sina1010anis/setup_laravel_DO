<?php

namespace App\Pattern\FactoryMethod\Core;
use App\Pattern\FactoryMethod\Interface\DBConnection;

class MongoDBConnection implements DBConnection
{
    public function connect()
    {
        return 'MongoDB Connect...!';
    }
}
