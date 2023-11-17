<?php

declare(strict_types=1);

namespace App\Pattern\Test\Injection;

class CarConfig
{

    public function __construct(public $top_1, public $top_2, public $top_3, public $top_4, public $top_5){}
    public function getTop1()
    {
        return $this->top_1;
    }

    public function getTop2()
    {
        return $this->top_2;
    }

    public function getTop3()
    {
        return $this->top_3;
    }

    public function getTop4()
    {
        return $this->top_4;
    }

    public function getTop5()
    {
        return $this->top_5;
    }
}
