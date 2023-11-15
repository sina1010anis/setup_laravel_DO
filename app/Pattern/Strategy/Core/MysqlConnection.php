<?php

declare(strict_types=1);

namespace App\Pattern\Strategy\Core;
use App\Pattern\Strategy\Interface\FunctionDB;

class MysqlConnection implements FunctionDB
{
    public function connection()
    {
        return 'Conncetion Mysql ...!';
    }


}
