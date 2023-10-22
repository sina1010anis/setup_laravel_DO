<?php

namespace App\Pattern\P1\Core\Builder\Core;

use App\Pattern\P1\Core\Abs\Core\MysqlAbs;
use App\Pattern\P1\Core\Builder\interface\BuilderDB;

class MysqlBuild implements BuilderDB
{
    public $mysql;
    public function __construct(public $nameDB, public $where, public $getData)
    {
        $this->mysql = new MysqlAbs();
    }
    public function buildSelect()
    {
        $selete = $this->mysql->selectDB();
        $selete->nameDB($this->nameDB);
        $selete->whereDB($this->where);
        $selete->getData($this->getData);
        return $selete->getStatusConnection();

    }

    public function buildDelete()
    {
        $selete = $this->mysql->deleteDB();
        $selete->nameDB($this->nameDB);
        $selete->whereDB($this->where);
        $selete->deleteData($this->getData);
        return $selete->getStatusConnection();
    }
}
