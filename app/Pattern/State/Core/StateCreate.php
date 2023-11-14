<?php

namespace App\Pattern\State\Core;
use App\Pattern\State\interface\State;

class StateCreate implements State
{
    public function proceedToNext(ProductContext $state)
    {
        $state->setState(new StateCheck());
    }

    public function toString() : string
    {
        return 'State now Create ..! ';
    }


}
