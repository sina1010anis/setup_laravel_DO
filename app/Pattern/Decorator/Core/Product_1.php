<?php
namespace App\Pattern\Decorator\Core;
use App\Pattern\Decorator\interface\BuyProduct;

class Product_1 implements BuyProduct
{
    public function buyProductInViewPrice () : int
    {
        return 5980;
    }
}
