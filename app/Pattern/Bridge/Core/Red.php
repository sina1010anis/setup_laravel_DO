<?php

namespace App\Pattern\Bridge\Core;
use App\Pattern\Bridge\interface\ColorInterface;

class Red implements ColorInterface
{
    public function setColor(): string
    {
        return 'Install Color red';
    }
}
