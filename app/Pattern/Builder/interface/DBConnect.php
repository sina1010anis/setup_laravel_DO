<?php

namespace App\Pattern\Builder\interface;

interface DBConnect
{
    public function setUsername(string $input) : string ;
    public function setPassword(string $input) : string ;
    public function checkConnection();
}
