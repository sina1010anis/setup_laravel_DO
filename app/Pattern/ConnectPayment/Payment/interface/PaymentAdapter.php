<?php

namespace App\Pattern\ConnectPayment\Payment\interface;

use App\Pattern\ConnectPayment\Connect\Pay;

use CurlHandle;

interface PaymentAdapter
{
    public function payment();
}
