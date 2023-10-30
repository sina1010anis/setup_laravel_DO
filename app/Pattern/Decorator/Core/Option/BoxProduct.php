<?php
namespace App\Pattern\Decorator\Core\Option;

use App\Pattern\Decorator\Core\Option\OptionAbstract\OptionDecorator;

class BoxProduct extends OptionDecorator
{
    private const PRICE_OPTION = 90;
    public function buyProductInViewPrice () : int
    {
        return $this->buyProduct->buyProductInViewPrice() + self::PRICE_OPTION;
    }
}
