<?php

namespace App\Pattern\Builder\Core;

use App\Pattern\Builder\interface\BuildBuyProductInterface;
use App\Pattern\Builder\interface\BuyProduct;

class BuyProductNormal implements BuildBuyProductInterface
{
    public function build (BuyProduct $buyProduct)
    {
        echo $buyProduct->authUser().PHP_EOL;
        echo $buyProduct->getProduct().PHP_EOL;
        echo $buyProduct->trueProduct('Normal ').PHP_EOL;
        echo $buyProduct->payment().PHP_EOL;
        echo $buyProduct->goToHome().PHP_EOL;
    }
}
