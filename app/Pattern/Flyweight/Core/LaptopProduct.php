<?php

namespace App\Pattern\Flyweight\Core;
use App\Pattern\Flyweight\interface\GetNameProductImp;

class LaptopProduct implements GetNameProductImp
{
    public function getName(string $name) : string
    {
        return 'Laptopn category => '.$name.'<br>';
    }
}
