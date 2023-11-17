<?php

declare(strict_types=1);

namespace App\Pattern\Test\Adapter\Core;

class Zarinpal
{
    public function pay()
    {
        return 'payment Zarinpal';
    }

    public function check()
    {
        return 'varify Zarinpal';
    }

    public function payment()
    {
        return $this->pay();
    }
}
