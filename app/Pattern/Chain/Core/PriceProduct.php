<?php

namespace App\Pattern\Chain\Core;

use App\Pattern\Chain\interface\BuyProducts;

class PriceProduct extends BuyProducts
{

    private $price = 1000;
    public function checkInClass ()
    {

        if ($this->price < 2500) {

            throw new \Exception("Ohh is not Price ...!");

        }

        echo 'Price Check (is safe)'.'<br>';
        $this->nextClass();


    }

}
