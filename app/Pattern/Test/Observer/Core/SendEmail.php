<?php

declare(strict_types=1);

namespace App\Pattern\Test\Observer\Core;

use App\Pattern\Test\Observer\Interface\ObserverImp;

class SendEmail
{
    private $obs = [];

    public function addObs(ObserverImp $obs): self
    {
        $this->obs[] = $obs;

        return $this;
    }

    public function newEmail()
    {
        echo 'Send Emial'.'<br>';
        $this->notify();
    }

    public function notify()
    {
        foreach ($this->obs as $obs) {
            $obs->update();
        }
    }
}
