<?php

namespace App\Pattern\Test\Bridge\Interface;

interface Implementer
{
    public function connection(string $username) : string|array;
}
