<?php

namespace App\Pattern\P1\Core\Abs\Core;

use App\Pattern\P1\Core\Abs\interface\QueryAbs;
use App\Pattern\P1\Core\DeleteMongoDB;
use App\Pattern\P1\Core\DeleteMysqlDB;
use App\Pattern\P1\Core\SeleteMongoDB;
use App\Pattern\P1\interface\QuerySelect;
use App\Pattern\P1\interface\QueryDelete;

class MongoDBAbs implements QueryAbs
{
    public function selectDB() : QuerySelect
    {
        return new SeleteMongoDB();
    }

    public function deleteDB() : QueryDelete
    {
        return new DeleteMongoDB();
    }
}
