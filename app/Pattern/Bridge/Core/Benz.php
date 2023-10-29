<?php

namespace App\Pattern\Bridge\Core;
use App\Pattern\Bridge\interface\ColorInterface;
use App\Pattern\Bridge\abstraction\Car;

class Benz extends Car
{
    public function setupColor(): string
    {
        return $this::class.' '.$this->color->setColor();
    }
}
