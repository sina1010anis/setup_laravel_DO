<?php

namespace App\Pattern\Command\Core;

use App\Pattern\Command\interface\FunctionResiver;

class Mobile implements FunctionResiver
{
    public function offSystem()
    {
        echo 'Mobile (OFF---)'.'<br>';
    }
    public function onSystem()
    {
        echo 'Mobile (ON---)'.'<br>';
    }
    public function dispathSystem()
    {
        echo 'Mobile (Dispath---)'.'<br>';
    }
    public function disconnectSystem()
    {
        echo 'Mobile (Disconnect---)'.'<br>';
    }
}
