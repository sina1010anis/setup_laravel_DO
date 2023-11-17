<?php

declare(strict_types=1);

namespace App\Pattern\Test\Prototype;

class ColorPhone
{
    public $color;
    private $isCopy;
    public function __construct()
    {
        $this->isCopy = 'Orginal';
    }
    public function __clone()
    {
        $this->isCopy = 'is Class Copy as ('.__METHOD__.')';
    }
    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getIsCopy()
    {
        return $this->isCopy;
    }
}
