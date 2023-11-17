<?php

declare(strict_types=1);

namespace App\Pattern\Test\Adapter\Core;
use App\Pattern\Test\Adapter\Interface\PaymentAdapter;

class PayirPayment implements PaymentAdapter
{
    private $pay;
    public function __construct()
    {
        $this->pay = new Payir();
    }
    public function pay()
    {
        echo $this->pay->payment();
    }


}
