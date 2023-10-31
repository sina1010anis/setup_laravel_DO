<?php
namespace App\Pattern\Decorator\Core\Option\OptionAbstract;
use App\Pattern\Decorator\interface\BuyProduct;
use App\Pattern\Decorator\interface\FoodImp;

abstract class OptionDecoratorExt implements FoodImp
{
    public function __construct(protected FoodImp $foodImp){}
    abstract public function nameFood() : string;
}
