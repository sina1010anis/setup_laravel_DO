<?php

namespace App\Pattern\ChainTest\interface;

use App\Pattern\ChainTest\Core\HomeStatus;

abstract class HomeChecker
{
    protected $successor;

    abstract public function check(HomeStatus $home);

    public function succeedWith(HomeChecker $successor)
    {
        $this->successor = $successor;
    }

    public function next(HomeStatus $home)
    {
        if (isset($this->successor)) {
            $this->successor->check($home);
        }
    }
}
