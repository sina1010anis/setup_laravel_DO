<?php

namespace App\Pattern\P1\Core;

use App\Pattern\P1\interface\QuerySelect;

class SeleteMongoDB implements QuerySelect
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

    public function getData(int $id)
    {
        $this->status_connection['Selete Data'] = $id;
    }

    /**
     * Get the value of status_connection
     */
    public function getStatusConnection()
    {
        return $this->status_connection;
    }
}
