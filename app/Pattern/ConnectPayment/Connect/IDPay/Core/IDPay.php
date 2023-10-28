<?php

namespace App\Pattern\ConnectPayment\Connect\IDPay\Core;

use App\Pattern\ConnectPayment\Connect\IDPay\interface\ConnectionIDPay;
use App\Pattern\ConnectPayment\Connect\Pay;
use CurlHandle;

class IDPay implements ConnectionIDPay, Pay
{
    public function __construct (protected array $params) {}

    // $params = [
    //     'order_id' => '101',
    //     'amount' => 10000,
    //     'name' => 'قاسم رادمان', ************* desired *************
    //     'phone' => '09382198592',************* desired *************
    //     'mail' => 'my@site.com',************* desired *************
    //     'desc' => 'توضیحات پرداخت کننده',
    //     'callback' => 'http://localhost:8000/test-2',
        // 'id' => '621be99b6c3305ba3d576b8e44f78d75', **************** verification ****************
        // 'order_id' => '101', **************** verification ****************
    //   ];
    public function verification ()
    {

          $ch = curl_init();
          curl_setopt($ch, CURLOPT_URL, 'https://api.idpay.ir/v1.1/payment/verify');
          curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($this->params));
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
          curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'X-API-KEY: 6a7f99eb-7c20-4412-a972-6dfb7cd253a4',
            'X-SANDBOX: 1',
          ));

          $result = curl_exec($ch);
          curl_close($ch);

          var_dump($result);
    }
    public function sendPay ()
    {

          $ch = curl_init();
          curl_setopt($ch, CURLOPT_URL, 'https://api.idpay.ir/v1.1/payment');
          curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($this->params));
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
          curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'X-API-KEY: 6a7f99eb-7c20-4412-a972-6dfb7cd253a4',
            'X-SANDBOX: 1'
          ));

          $result = curl_exec($ch);
          curl_close($ch);

          return $result;
    }
}
