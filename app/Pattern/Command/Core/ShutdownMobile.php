<?php

namespace App\Pattern\Command\Core;

use App\Pattern\Command\interface\FunctionCommand;
use App\Pattern\Command\interface\FunctionResiver;

class ShutdownMobile extends FunctionCommand
{
    public function exec()
    {
        $this->functionResiver->dispathSystem();
        $this->functionResiver->offSystem();
    }
}
