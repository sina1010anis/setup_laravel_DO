<?php

namespace App\Pattern\State_2\interface;

interface StatePowerImp
{
    public function nextSate(PowerCheckImp $powerCheckImp);
    public function statusState() : string;
}
