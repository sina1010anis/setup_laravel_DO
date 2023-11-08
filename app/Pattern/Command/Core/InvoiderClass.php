<?php

namespace App\Pattern\Command\Core;

use App\Pattern\Command\interface\FunctionCommand;
use App\Pattern\Command\interface\FunctionResiver;

class InvoiderClass
{
    public $command;

    public function setCommand(FunctionCommand $command)
    {
        $this->command = $command;
    }
    public function run()
    {
        $this->command->exec();
    }


}
