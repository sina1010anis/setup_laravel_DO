<?php

namespace App\Pattern\SimpelFactory\interface;

interface FactoryDBInterface
{
    public function factory (string $type) : ConnectionDB|string;
}
