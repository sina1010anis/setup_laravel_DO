<?php

declare(strict_types=1);

namespace App\Pattern\Test\Visitor\Core;

use App\Pattern\Test\Visitor\Interface\NumberImp;

class NumberVistor
{
    public function visitor(NumberImp $numberImp, $number)
    {
        return $numberImp->getNumner($number) + $number;
    }
}
