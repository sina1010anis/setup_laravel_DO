<?php

declare(strict_types=1);

namespace App\Pattern\Test\Adapter\Core;
use App\Pattern\Test\Adapter\Interface\PaymentAdapter;

class ZarinpalPayment implements PaymentAdapter
{
    private $pay;
    public function __construct()
    {
        $this->pay = new Zarinpal();
    }
    public function pay()
    {
        echo $this->pay->check();
    }


}
