<?php

namespace App\Pattern\Builder\Database;
use App\Pattern\Builder\interface\DBConnect;

class MongoDB implements DBConnect
{
    public function setUsername(string $input) : string
    {
        sleep(3);
        return (string) $input.'==> Set Username';
    }

    public function setPassword(string $input) : string
    {
        sleep(3);
        return (string) $input.'==> Set Password';
    }

    public function checkConnection()
    {
        sleep(3);
        return (string) 'Good Connection ==> MongoDB';
    }
}
