<?php

namespace App\Pattern\FactoryMethod\Core;
use App\Pattern\FactoryMethod\Interface\DBConnection;

class FactoryConnect
{
    public function run(DBConnection $db_connection)
    {
        if ($db_connection instanceof MongoDBConnection) {
            echo 'MongoDB';
        } else {
            echo 'Mysql';
        }
    }
}
