<?php

namespace App\Pattern\Command\Core;

use App\Pattern\Command\interface\FunctionResiver;

class PC implements FunctionResiver
{
    public function offSystem()
    {
        echo 'PC (OFF---)'.'<br>';
    }
    public function onSystem()
    {
        echo 'PC (ON---)'.'<br>';
    }
    public function dispathSystem()
    {
        echo 'PC (Dispath---)'.'<br>';
    }
    public function disconnectSystem()
    {
        echo 'PC (Disconnect---)'.'<br>';
    }
}
