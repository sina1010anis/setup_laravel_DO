<?php

declare(strict_types=1);

namespace App\Pattern\Test\Chain\Core;
use App\Pattern\Test\Chain\Interface\ChainOImp;
use Exception;

class Chain_2 extends ChainOImp
{
    public $if = true;
    public function check()
    {
        if (!$this->if) {
            throw new Exception('Error Chain 2');
        }

        $this->nextClass();
    }


}
