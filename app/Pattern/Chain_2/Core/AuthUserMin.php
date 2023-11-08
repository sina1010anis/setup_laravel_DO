<?php

namespace App\Pattern\Chain_2\Core;
use App\Pattern\Chain_2\interface\MinExt;

class AuthUserMin extends MinExt
{
    private $auth = true;

    public function handel() : bool|\Exception
    {
        if (!$this->auth) {
            throw new \Exception('Auth Error...!');
        }
        return true;
    }
}
