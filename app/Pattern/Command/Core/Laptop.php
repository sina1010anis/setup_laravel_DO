<?php

namespace App\Pattern\Command\Core;

use App\Pattern\Command\interface\FunctionResiver;

class Laptop implements FunctionResiver
{
    public function offSystem()
    {
        echo 'Laotop (OFF---)'.'<br>';
    }
    public function onSystem()
    {
        echo 'Laotop (ON---)'.'<br>';
    }
    public function dispathSystem()
    {
        echo 'Laotop (Dispath---)'.'<br>';
    }
    public function disconnectSystem()
    {
        echo 'Laotop (Disconnect---)'.'<br>';
    }
}
