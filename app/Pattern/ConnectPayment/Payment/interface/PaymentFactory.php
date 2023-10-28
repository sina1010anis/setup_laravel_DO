<?php

namespace App\Pattern\ConnectPayment\Payment\interface;

use App\Pattern\ConnectPayment\Connect\Pay;

use CurlHandle;

interface PaymentFactory
{
    public static function factory(string $type, array $data) : Pay;
    public static function setData(array $data);
}
