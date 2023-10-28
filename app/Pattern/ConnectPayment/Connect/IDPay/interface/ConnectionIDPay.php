<?php

namespace App\Pattern\ConnectPayment\Connect\IDPay\interface;

use CurlHandle;

interface ConnectionIDPay
{
    public function verification();
    public function sendPay();
}
