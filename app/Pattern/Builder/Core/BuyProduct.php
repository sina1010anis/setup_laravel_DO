<?php

namespace App\Pattern\Builder\Core;
use App\Pattern\Builder\interface\BuyProduct as BuyProductInterface;

class BuyProduct implements BuyProductInterface
{
    public function authUser()
    {
        sleep(3);
        return 'Username : 342384908234';
    }
    public function getProduct()
    {
        sleep(3);
        return 'Get product : Sumsung S23 (Reop)';
    }
    public function trueProduct($modelUser)
    {
        sleep(1);
        return "Get product : Sumsung S23 (Reop) ==> (".$modelUser."Product)";
    }
    public function payment()
    {
        sleep(5);
        return '569 $ ==> Ok Pyment';
    }
    public function goToHome()
    {
        sleep(3);
        return 'Home Page';
    }
}
