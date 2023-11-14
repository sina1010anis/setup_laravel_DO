<?php

namespace App\Pattern\State_2\Core;

use App\Pattern\State_2\interface\PowerCheckImp;
use App\Pattern\State_2\interface\StatePowerImp;

class FullPower implements StatePowerImp
{

    public function nextSate(PowerCheckImp $powerCheckImp)
    {
        $powerCheckImp->setSate(new MinPower());
    }

    public function statusState() : string
    {
        return 'Full Power System ....!';
    }


}
