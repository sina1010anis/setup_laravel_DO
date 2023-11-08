<?php

namespace App\Pattern\Chain_2\Core;
use App\Pattern\Chain_2\interface\MinExt;

class FactorCheck extends MinExt
{
    private $factor = 3;
    public function handel() : bool|\Exception
    {
        if ($this->factor < 3) {
            throw new \Exception('Factor Error...!');
        }
        return true;
    }
}
