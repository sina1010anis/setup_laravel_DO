<?php

namespace App\Pattern\StaticFactory\Core;
use App\Pattern\StaticFactory\interface\Car;

class BMW implements Car
{
    public function model() : string
    {
        return (string) $this::class;
    }
}
