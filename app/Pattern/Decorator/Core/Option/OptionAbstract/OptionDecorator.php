<?php
namespace App\Pattern\Decorator\Core\Option\OptionAbstract;
use App\Pattern\Decorator\interface\BuyProduct;

abstract class OptionDecorator implements BuyProduct
{
    public function __construct(protected BuyProduct $buyProduct){}
    abstract public function buyProductInViewPrice () : int;
}
