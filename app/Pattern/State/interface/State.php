<?php

namespace App\Pattern\State\interface;

use App\Pattern\State\Core\ProductContext;

interface State
{
    public function proceedToNext(ProductContext $state);
    public function toString() :string ;
}
