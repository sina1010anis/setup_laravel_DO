<?php

namespace App\Pattern\Strategy\Core;
use App\Pattern\Strategy\Interface\ConnectionDBImp;
use App\Pattern\Strategy\Interface\FunctionDB;

class DBconnection implements ConnectionDBImp
{

    public $database;
    public function setDatabase(FunctionDB $database) : self
    {
        $this->database = $database;
        return $this;
    }

    public function connect()
    {
        echo $this->database->connection();
    }


}
