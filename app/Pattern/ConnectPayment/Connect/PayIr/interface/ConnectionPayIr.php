<?php

namespace App\Pattern\ConnectPayment\Connect\PayIr\interface;

use CurlHandle;

interface ConnectionPayIr
{
    public function send();
    public function verify();
    public function curlPost($url, $params);
    public function redirect($result);
}
