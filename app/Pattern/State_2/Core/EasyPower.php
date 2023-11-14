<?php

declare(strict_types=1);

namespace App\Pattern\State_2\Core;

use App\Pattern\State_2\interface\PowerCheckImp;
use App\Pattern\State_2\interface\StatePowerImp;

class EasyPower implements StatePowerImp
{
    public function nextSate(PowerCheckImp $powerCheckImp)
    {
        echo 'Is not state in pc ...!';
    }

    public function statusState() : string
    {
        return 'Easy Power System ....!';;
    }


}
