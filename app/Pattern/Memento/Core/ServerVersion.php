<?php

namespace App\Pattern\Memento\Core;
use App\Pattern\Memento\interface\ShowVersionImp;

class ServerVersion extends ShowVersionImp
{
    public function getVeriosn() : string
    {
        return 'Server % cd % Version'.":  Server Side Domiko" .$this->version;
    }


}
