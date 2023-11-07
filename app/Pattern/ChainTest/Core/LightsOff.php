<?php

namespace App\Pattern\ChainTest\Core;

use App\Pattern\ChainTest\interface\HomeChecker;

class LightsOff extends HomeChecker
{
    public function check(HomeStatus $home)
    {
        if (!$home->lightsOff) {
            throw new \Exception('not LightsOff ABORT!');
        }
        echo 'LightsOff ABORT!'.'<br>';
        $this->next($home);
    }
}
