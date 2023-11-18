<?php

declare(strict_types=1);

namespace App\Pattern\Test\Chain\Core;
use App\Pattern\Test\Chain\Interface\ChainOImp;
use Exception;

class Chain_1 extends ChainOImp
{
    public $if = false;
    public function check()
    {
        if ($this->if) {
            throw new Exception('Error Chain 1');
        }

        $this->nextClass();
    }


}
