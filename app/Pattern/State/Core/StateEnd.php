<?php

namespace App\Pattern\State\Core;
use App\Pattern\State\interface\State;

class StateEnd implements State
{
    public function proceedToNext(ProductContext $state)
    {
        // not status
    }

    public function toString() : string
    {
        return 'State end ..! ';
    }


}
