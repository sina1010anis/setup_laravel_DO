<?php

namespace App\Pattern\Flyweight\Core;
use App\Pattern\Flyweight\interface\GetNameProductImp;

class MobileProduct implements GetNameProductImp
{
    public function getName(string $name) : string
    {
        return 'Mobile category => '.$name.'<br>';
    }
}
