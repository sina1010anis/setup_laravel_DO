<?php

namespace App\Pattern\ChainTest\Core;

use App\Pattern\ChainTest\interface\HomeChecker;

class AlarmOff extends HomeChecker
{
    public function check(HomeStatus $home)
    {
        if (!$home->alarmOff) {
            throw new \Exception('not AlarmOff ABORT!');
        }
        echo 'AlarmOff ABORT!'.'<br>';
        $this->next($home);
    }
}
