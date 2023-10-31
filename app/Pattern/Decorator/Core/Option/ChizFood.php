<?php
namespace App\Pattern\Decorator\Core\Option;

use App\Pattern\Decorator\Core\Option\OptionAbstract\OptionDecorator;
use App\Pattern\Decorator\Core\Option\OptionAbstract\OptionDecoratorExt;

class ChizFood extends OptionDecoratorExt
{
    public const NAME_OPTION = 'chiz';
    public function nameFood () : string
    {
        return $this->foodImp->nameFood(). ', '.self::NAME_OPTION;
    }
}
