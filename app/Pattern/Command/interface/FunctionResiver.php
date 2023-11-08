<?php

namespace App\Pattern\Command\interface;

interface FunctionResiver
{
    public function offSystem();
    public function onSystem();
    public function dispathSystem();
    public function disconnectSystem();
}
