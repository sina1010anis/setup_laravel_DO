<?php

declare(strict_types=1);

namespace App\Pattern\Test\Strategy\Core;
use App\Pattern\Test\Strategy\Interface\SendNameDB;

class MysqlSendName implements SendNameDB
{
    public function send()
    {
        return 'Mysql';
    }


}
