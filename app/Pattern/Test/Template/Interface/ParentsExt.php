<?php

declare(strict_types=1);

namespace App\Pattern\Test\Template\Interface;

abstract class ParentsExt
{
    protected $name;
    public function getName()
    {
        return $this->name;
    }

    public abstract function setName(string $name);
}
