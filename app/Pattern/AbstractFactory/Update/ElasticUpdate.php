<?php

namespace App\Pattern\AbstractFactory\Update;

use App\Pattern\AbstractFactory\Interface\IUpdate;

class ElasticUpdate implements IUpdate
{
    public function Sub () : string
    {
        return (string) get_class($this);
    }
}
