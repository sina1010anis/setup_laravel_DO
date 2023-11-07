<?php

namespace App\Pattern\Chain\Core;

use App\Pattern\Chain\interface\BuyProducts;

class CheckLoginUser extends BuyProducts
{

    private $login_user = true;
    public function checkInClass ()
    {

        if (!$this->login_user) {

            throw new \Exception("Ohh is not User Login...!");

        }
        echo 'User Check (is safe)'.'<br>';
        $this->nextClass();

    }

}
