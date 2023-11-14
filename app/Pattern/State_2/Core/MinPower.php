<?php

namespace App\Pattern\State_2\Core;

use App\Pattern\State_2\interface\PowerCheckImp;
use App\Pattern\State_2\interface\StatePowerImp;

class MinPower implements StatePowerImp
{
    public function nextSate(PowerCheckImp $powerCheckImp)
    {
        $powerCheckImp->setSate(new EasyPower());
    }

    public function statusState() : string
    {
        return 'Min Power System ....!';
    }


}
