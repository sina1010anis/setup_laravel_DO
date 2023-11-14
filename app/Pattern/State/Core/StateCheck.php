<?php

namespace App\Pattern\State\Core;
use App\Pattern\State\interface\State;

class StateCheck implements State
{
    public function proceedToNext(ProductContext $state)
    {
        $state->setState(new StateEnd());
    }

    public function toString() : string
    {
        return 'Status State (Good) ..! ';
    }


}
