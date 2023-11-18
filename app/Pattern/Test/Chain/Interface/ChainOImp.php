<?php

declare(strict_types=1);

namespace App\Pattern\Test\Chain\Interface;

abstract class ChainOImp
{
    private $chain;
    public function nextClass()
    {
        if (isset($this->chain)) {
            $this->chain->check();
        }
    }

    public function setChain($chain)
    {
        $this->chain = $chain;
    }

    public abstract function check();
}
