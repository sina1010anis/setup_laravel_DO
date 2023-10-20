<?php

namespace App\Pattern\Builder\Core;

use App\Pattern\Builder\interface\BuyProduct;

class ProductBuy
{
    public function userVip (BuyProduct $buyProduct)
    {
        $vip = new BuyProductVip();
        return $vip->build($buyProduct);
    }

    public function userNormal (BuyProduct $buyProduct)
    {
        $vip = new BuyProductNormal();
        return $vip->build($buyProduct);
    }
}
