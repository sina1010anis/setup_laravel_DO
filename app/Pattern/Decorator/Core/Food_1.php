<?php
namespace App\Pattern\Decorator\Core;
use App\Pattern\Decorator\interface\BuyProduct;
use App\Pattern\Decorator\interface\FoodImp;

class Food_1 implements FoodImp
{
    private const NAME_FOOD = 'Food_1';
    public function nameFood() : string
    {
        return self::NAME_FOOD;
    }
}
