<?php

namespace App\Pattern\P1\Core\Factory\Core;

use App\Pattern\P1\Core\Builder\Core\MongoDBBuild;
use App\Pattern\P1\Core\Builder\Core\MysqlBuild;
use App\Pattern\P1\Core\Builder\interface\BuilderDB;
use App\Pattern\P1\Core\Factory\interface\FactoryDB;
use App\Pattern\P1\interface\CloneI;

class ConncetionDB implements FactoryDB, CloneI
{
    public function __construct(public $nameDB, public $where, public $getData){}
    public function __clone()
    {
        $this->where = $this->where;
        $this->nameDB = $this->nameDB;
        $this->getData = $this->getData;
    }
    public function create(string $data): BuilderDB
    {
        if ($data == 'mysql') {
            return new MysqlBuild($this->nameDB, $this->where, $this->getData);
        } else if ($data == 'mongodb') {
            return new MongoDBBuild($this->nameDB, $this->where, $this->getData);
        } else {
            return new MysqlBuild($this->nameDB, $this->where, $this->getData);
        }
    }

    /**
     * Get the value of nameDB
     */
    public function getNameDB()
    {
        return $this->nameDB;
    }

    /**
     * Set the value of nameDB
     */
    public function setNameDB($nameDB): self
    {
        $this->nameDB = $nameDB;

        return $this;
    }

    /**
     * Get the value of where
     */
    public function getWhere()
    {
        return $this->where;
    }

    /**
     * Set the value of where
     */
    public function setWhere($where): self
    {
        $this->where = $where;

        return $this;
    }

    /**
     * Get the value of getData
     */
    public function getGetData()
    {
        return $this->getData;
    }

    /**
     * Set the value of getData
     */
    public function setGetData($getData): self
    {
        $this->getData = $getData;

        return $this;
    }
}
