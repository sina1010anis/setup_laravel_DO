<?php

namespace App\Pattern\AbstractFactory\Select;

use App\Models\Product;
use App\Pattern\AbstractFactory\Interface\ISelect;

class MysqlSelect implements ISelect
{
    public function Sub ()
    {
        return Product::all();
    }
}
