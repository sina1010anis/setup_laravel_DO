<?php

namespace App\Pattern\AbstractFactory\Update;

use App\Models\Product;
use App\Pattern\AbstractFactory\Interface\IUpdate;

class MysqlUpdate implements IUpdate
{
    public function Sub () : string
    {
        return Product::where('price', 466)->update(['name' => fake()->userName()]);
    }
}
