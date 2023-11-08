<?php

namespace App\Pattern\Chain_2\Core;
use App\Pattern\Chain_2\interface\MinExt;

class IsAdmin extends MinExt
{
    private $is_admin = true;
    public function handel() : bool|\Exception
    {
        if (!$this->is_admin) {
            throw new \Exception('Admin Error...!');
        }
        return true;
    }
}
