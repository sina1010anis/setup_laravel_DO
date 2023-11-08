<?php

namespace App\Pattern\Chain_2\Core;
use App\Pattern\Chain_2\interface\MinExt;

class NumberProductMin extends MinExt
{
    private $number_product = 1;
    public function handel() : bool|\Exception
    {
        if ($this->number_product == 0) {
            throw new \Exception('Number Error...!');
        }

        return true;
    }
}
