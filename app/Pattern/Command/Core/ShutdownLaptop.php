<?php

namespace App\Pattern\Command\Core;

use App\Pattern\Command\interface\FunctionCommand;
use App\Pattern\Command\interface\FunctionResiver;

class ShutdownLaptop extends FunctionCommand
{
    public function exec()
    {
        $this->functionResiver->offSystem();
    }
}
