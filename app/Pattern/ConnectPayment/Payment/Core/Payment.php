<?php

namespace App\Pattern\ConnectPayment\Payment\Core;

use App\Pattern\ConnectPayment\Connect\Pay;
use App\Pattern\ConnectPayment\Connect\PayIr\Core\PayIr as CorePayIr;
use App\Pattern\ConnectPayment\Payment\interface\PaymentFactory;

class Payment implements PaymentFactory
{
    public static $data;
    public static function factory (string $type, array $data) : Pay
    {
        self::setData($data);

        return match ($type) {
            'idpay' => (new IDPayAdapter(self::$data)),
            'payir' => (new PayIrAdapter(self::$data)),
            default  => (new IDPayAdapter(self::$data))
        };
    }

    public static function setData(array $data)
    {
        self::$data = $data;
    }

}
