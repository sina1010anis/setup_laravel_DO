<?php

namespace App\Pattern\Memento\Core;
use App\Pattern\Memento\interface\ShowVersionImp;

class ClientVersion extends ShowVersionImp
{

    public function getVeriosn() : string
    {
        return 'Client ---> Version'.": Vesibility Client " .$this->version;
    }

}
