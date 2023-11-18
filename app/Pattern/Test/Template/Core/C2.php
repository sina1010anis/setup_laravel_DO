<?php

declare(strict_types=1);

namespace App\Pattern\Test\Template\Core;
use App\Pattern\Test\Template\Interface\ParentsExt;

class C2 extends ParentsExt
{
    public function setName(string $name)
    {
        $this->name = $name;
    }
}
