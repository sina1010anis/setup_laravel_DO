<?php

namespace App\Pattern\AbstractFactory\Select;

use App\Pattern\AbstractFactory\Interface\ISelect;

class MongoDBSelect implements ISelect
{
    public function Sub () : string
    {
        return (string) get_class($this);
    }
}
