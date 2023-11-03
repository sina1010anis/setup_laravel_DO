<?php

namespace App\Pattern\Flyweight\Core;
use App\Pattern\Flyweight\interface\GetNameProductImp;

class FlyweightProduct
{
    private array $tmp = [];
    private int $for_if = 0;
    public function sreachClass(string $name)
    {
        if (!isset($this->tmp[$name])) {
            $this->for_if += 1;
            return $this->tmp[$name] = $this->sendClass($name);
        }
            return $this->tmp[$name];
    }

    public function sendClass ($name) : GetNameProductImp
    {
        if ($name[0] == 'M') {
            return new MobileProduct();
        } else {
            return new LaptopProduct();
        }
    }
    public function getForIf(): int
    {
        return $this->for_if;
    }
}
