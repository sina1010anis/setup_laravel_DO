<?php

declare(strict_types=1);

namespace App\Pattern\Test\Visitor\Core;
use App\Pattern\Test\Visitor\Interface\NumberImp ;

class Number implements NumberImp
{
    public function getNumner($number)
    {
        return $number;
    }


}
