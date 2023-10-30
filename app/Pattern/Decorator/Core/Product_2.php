<?php
namespace App\Pattern\Decorator\Core;
use App\Pattern\Decorator\interface\BuyProduct;

class Product_2 implements BuyProduct
{
    public function buyProductInViewPrice () : int
    {
        return 6544;
    }
}
