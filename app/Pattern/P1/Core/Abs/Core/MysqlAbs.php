<?php

namespace App\Pattern\P1\Core\Abs\Core;

use App\Pattern\P1\Core\Abs\interface\QueryAbs;
use App\Pattern\P1\Core\DeleteMysqlDB;
use App\Pattern\P1\interface\QuerySelect;
use \App\Pattern\P1\Core\SelectMysqlDB as SelectMysqlDBCore;
use App\Pattern\P1\interface\QueryDelete;

class MysqlAbs implements QueryAbs
{
    public function selectDB() : QuerySelect
    {
        return new SelectMysqlDBCore();
    }

    public function deleteDB() : QueryDelete
    {
        return new DeleteMysqlDB();
    }
}
