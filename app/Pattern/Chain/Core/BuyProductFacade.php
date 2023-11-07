<?php

namespace App\Pattern\Chain\Core;

class BuyProductFacade
{
    public static function facade () : void
    {
        $login = new CheckLoginUser();
        $number = new NumberProducts();
        $price = new PriceProduct();

        $login->setTempNextClass($number);
        $number->setTempNextClass($price);

        $login->checkInClass();
    }
}
