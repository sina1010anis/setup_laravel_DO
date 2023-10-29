<?php

namespace App\Pattern\Bridge\Core;
use App\Pattern\Bridge\interface\ColorInterface;

class Green implements ColorInterface
{
    public function setColor(): string
    {
        return 'Install Color green';
    }
}
