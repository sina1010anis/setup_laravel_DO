<?php

namespace App\Pattern\Builder\interface;

interface BuyProduct
{
    public function authUser();
    public function getProduct();
    public function trueProduct($modeUser);
    public function payment();
    public function goToHome();
}
