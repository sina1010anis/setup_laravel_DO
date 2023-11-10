<?php

namespace App\Pattern\Iteretor\Core;

use App\Pattern\Iteretor\Interface\ProductCheckerImp;


class Products implements ProductCheckerImp
{
    public function __construct(private string $name, private int $price, private string $title ){}

    public function getName () : string|null
    {
        return $this->name;
    }

    public function getPrice () : string
    {
        return $this->price;
    }

    public function getTitle () : string
    {
        return $this->title;
    }
}
