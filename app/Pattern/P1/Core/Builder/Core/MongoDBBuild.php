<?php

namespace App\Pattern\P1\Core\Builder\Core;

use App\Pattern\P1\Core\Abs\Core\MongoDBAbs;
use App\Pattern\P1\Core\Builder\interface\BuilderDB;

class MongoDBBuild implements BuilderDB
{
    public $mongo;
    public function __construct(public $nameDB, public $where, public $getData)
    {
        $this->mongo = new MongoDBAbs();
    }
    public function buildSelect()
    {
        $selete = $this->mongo->selectDB();
        $selete->nameDB($this->nameDB);
        $selete->whereDB($this->where);
        $selete->getData($this->getData);
        return $selete->getStatusConnection();

    }

    public function buildDelete()
    {
        $selete = $this->mongo->deleteDB();
        $selete->nameDB($this->nameDB);
        $selete->whereDB($this->where);
        $selete->deleteData($this->getData);
        return $selete->getStatusConnection();
    }
}
