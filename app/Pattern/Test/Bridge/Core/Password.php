<?php

namespace App\Pattern\Test\Bridge\Core;
use App\Pattern\Test\Bridge\Interface\Implementer;

class Password implements Implementer
{
    public function connection(string $username) : string|array
    {
        return $username;
    }


}
