<?php

namespace App\Pattern\ChainTest\Core;

use App\Pattern\ChainTest\interface\HomeChecker;

class Locks extends HomeChecker
{
    public function check(HomeStatus $home)
    {
        if (!$home->locks) {
            throw new \Exception('not locked ABORT!');
        }
        echo 'locked ABORT!'.'<br>';
        $this->next($home);
    }
}
