<?php

declare(strict_types=1);

namespace App\Pattern\Test\Bridge\Core;
use App\Pattern\Test\Bridge\Interface\Implementer;

class Username implements Implementer
{
    public function connection(string $username) : string|array
    {
        return $username;
    }


}
