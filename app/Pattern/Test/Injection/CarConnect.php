<?php

declare(strict_types=1);

namespace App\Pattern\Test\Injection;

class CarConnect
{
    public function __construct(private CarConfig $config)
    {

        $this->config->getTop1();
        $this->config->getTop2();
        $this->config->getTop3();
        $this->config->getTop4();
        $this->config->getTop5();
    }
}
