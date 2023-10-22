<?php

namespace App\Pattern\P1\Core;

use App\Pattern\P1\interface\QueryDelete;
use App\Pattern\P1\interface\QuerySelect;

class DeleteMysqlDB implements QueryDelete
{
    public $status_connection = [];
    public function nameDB(string $val) : void
    {
        $this->status_connection['DataBase'] = $val;
    }

    public function whereDB(string $val) : void
    {
        $this->status_connection['where Databane'] = $val;
    }

    public function deleteData(int $id)
    {
        $this->status_connection['Delete Data'] = $id;
    }

    /**
     * Get the value of status_connection
     */
    public function getStatusConnection()
    {
        return $this->status_connection;
    }
}
