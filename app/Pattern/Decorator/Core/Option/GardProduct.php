<?php
namespace App\Pattern\Decorator\Core\Option;

use App\Pattern\Decorator\Core\Option\OptionAbstract\OptionDecorator;
use App\Pattern\Decorator\interface\BuyProduct;

class GardProduct extends OptionDecorator
{
    private const PRICE_OPTION = 80;
    public function buyProductInViewPrice () : int
    {
        return $this->buyProduct->buyProductInViewPrice() + self::PRICE_OPTION;
    }
}
