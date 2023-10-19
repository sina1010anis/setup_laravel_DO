<?php

namespace App\Pattern\AbstractFactory\Select;

use App\Pattern\AbstractFactory\Interface\ISelect;

class ElasticSelect implements ISelect
{
    public function Sub () : string
    {
        return (string) get_class($this);
    }
}
