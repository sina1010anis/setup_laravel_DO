<?php

declare(strict_types=1);

namespace App\Pattern\State\Core;

use App\Pattern\State\interface\State;

class ProductContext
{
    private State $state;

    public function createState()
    {
        $this->state = new StateCreate();
        return $this;
    }

    public function proceedToNext()
    {
        $this->state->proceedToNext($this);
    }

    public function toString()
    {
        echo $this->state->toString();
    }


    public function setState(State $state)
    {
        $this->state = $state;
        return $this;
    }
}
