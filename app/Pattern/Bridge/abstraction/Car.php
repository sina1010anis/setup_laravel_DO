<?php

namespace App\Pattern\Bridge\abstraction;

abstract class Car
{

    public function __construct(public $color){}

    public abstract function setupColor();
}
