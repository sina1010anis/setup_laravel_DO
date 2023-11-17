<?php

declare(strict_types=1);

namespace App\Pattern\Test\Adapter\Core;

class Payir
{
    public function payment()
    {
        return 'payment Payir';
    }

    public function verify()
    {
        return 'varify Payir';
    }

    public function endPayment()
    {
        return $this->payment(). '  ' . $this->verify();
    }
}
