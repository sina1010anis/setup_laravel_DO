<?php

declare(strict_types=1);

namespace App\Pattern\State_2\Core;

use App\Pattern\State_2\interface\PowerCheckImp;
use App\Pattern\State_2\interface\StatePowerImp;

class State implements PowerCheckImp
{
    private StatePowerImp $state;
    public function setSate(StatePowerImp $powerCheck): void
    {
        $this->state = $powerCheck;
    }

    public function createState() : void
    {
        $this->state = new FullPower();
    }

    public function nextSate() : void
    {
        $this->state->nextSate($this);
    }

    public function statusState() : string
    {
        return (isset($this->state)) ? $this->state->statusState() : 'PC is Off ...!';
    }


}
