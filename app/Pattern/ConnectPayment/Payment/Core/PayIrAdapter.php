<?php

namespace App\Pattern\ConnectPayment\Payment\Core;

use App\Pattern\ConnectPayment\Connect\Pay;
use App\Pattern\ConnectPayment\Connect\PayIr\Core\PayIr as CorePayIr;
use App\Pattern\ConnectPayment\Payment\interface\PaymentAdapter;

class PayIrAdapter implements PaymentAdapter, Pay
{
    public function __construct (protected array $data) {}
    // $this->data = [
        // 'api' => 'YOUR-API-KEY';
        // 'amount' => 98000;
        // 'redirect' => 'http://YOUR-CALLBACK-URL';
        // 'token' => $this->data['token'], **************** verify ****************
    // ]
    public function payment ()
    {
        $pay = new CorePayIr($this->data);
        return $pay->send();
    }
}
