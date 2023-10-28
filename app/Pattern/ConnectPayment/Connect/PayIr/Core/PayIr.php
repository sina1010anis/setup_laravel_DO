<?php

namespace App\Pattern\ConnectPayment\Connect\PayIr\Core;

use App\Pattern\ConnectPayment\Connect\Pay;
use App\Pattern\ConnectPayment\Connect\PayIr\interface\ConnectionPayIr;
use CurlHandle;

class PayIr implements ConnectionPayIr, Pay
{
    public function __construct (protected array $data) {}
    // $this->data = [
        // 'api' => 'YOUR-API-KEY';
        // 'amount' => 98000;
        // 'redirect' => 'http://YOUR-CALLBACK-URL';
        // 'token' => $this->data['token'], **************** verify ****************
    // ]
    public function send ()
    {
        return $this->curlPost('https://pay.ir/pg/send', [
            'api'          => $this->data['api'],
            'amount'       => $this->data['amount'],
            'redirect'     => $this->data['redirect'],
            'mobile'       => (isset($this->data['mobile'])) ? $this->data['mobile'] : null,
            'factorNumber' => (isset($this->data['factorNumber'])) ? $this->data['factorNumber'] : null,
            'description'  => (isset($this->data['description'])) ? $this->data['description'] : null,
        ]);
    }
    public function verify ()
    {
        return $this->curlPost('https://pay.ir/pg/verify', [
            'api' 	=> $this->data['api'],
            'token' => $this->data['token'],
        ]);
    }
    public function curlPost ($url, $params)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($params));
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
        ]);
        $res = curl_exec($ch);
        curl_close($ch);

        return $res;
    }

    public function redirect($result)
    {
        $res = json_decode($result);
        if($res->status) {
            $go = "https://pay.ir/pg/$res->token";
            header("Location: $go");
        } else {
            echo $res->errorMessage;
        }
    }
}
