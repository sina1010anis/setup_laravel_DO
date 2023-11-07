<?php

namespace App\Pattern\Chain\Core;

use App\Pattern\Chain\interface\BuyProducts;

class NumberProducts extends BuyProducts
{

    private $number = 5;
    public function checkInClass ()
    {

        if ($this->number > 10) {

            throw new \Exception("Ohh is not Number Product...!");

        }

        echo 'Number Check (is safe)'.'<br>';
        $this->nextClass();

    }

}
