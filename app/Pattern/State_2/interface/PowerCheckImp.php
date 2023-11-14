<?php

namespace App\Pattern\State_2\interface;

interface PowerCheckImp
{
    public function setSate(StatePowerImp $powerCheck): void;
    public function createState() : void;
    public function statusState() : string;
}
