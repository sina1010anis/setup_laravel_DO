<?php

namespace App\Pattern\Command\interface;

abstract class FunctionCommand
{
    public function __construct(public FunctionResiver $functionResiver){}
    public abstract function exec();
}
