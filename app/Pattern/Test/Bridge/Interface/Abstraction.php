<?php

declare(strict_types=1);

namespace App\Pattern\Test\Bridge\Interface;

abstract class Abstraction implements Implementer
{
    public function __construct(public Implementer $implementer){}

    public abstract function connection(string $username) : string|array;

}
