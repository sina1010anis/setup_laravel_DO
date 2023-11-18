<?php

declare(strict_types=1);

namespace App\Pattern\Test\Flywedht\Core;

use App\Pattern\Test\Flywedht\Interface\ShuoldBrode;

class ItemFlyweght
{
    private $tmp = [];
    private $for_if = 0;

    public function flyItem($name)
    {
        if (!isset($this->tmp[$name])) {
            $this->for_if += 1;
            $this->tmp[$name] = $this->searchClass();
        }
        return $this->tmp[$name];
    }

    public function searchClass()
    {
        if (count($this->tmp) == 0) {
            return new Item_1();
        } else if (count($this->tmp) == 1) {
            return new Item_2();
        } else if (count($this->tmp) == 2) {
            return new Item_3();
        } else {
            return new Item_4();
        }
    }

    public function addTmp(ShuoldBrode $shuoldBrode)
    {
        $this->tmp[] = $shuoldBrode;
    }

    public function getForIf()
    {
        return $this->for_if;
    }
}
