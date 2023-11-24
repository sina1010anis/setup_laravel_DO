<?php

declare(strict_types=1);

namespace App\Pattern\Test\Observer\Core;

use App\Pattern\Test\Observer\Interface\ObserverImp;

class Obs_1 implements ObserverImp
{
    public function update()
    {
        echo 'Update Obs 1';
    }


}
