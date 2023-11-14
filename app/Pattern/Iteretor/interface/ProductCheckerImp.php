<?php

namespace App\Pattern\Iteretor\interface;

interface ProductCheckerImp
{
    public function getName () : string|null;
    public function getPrice () : string;
    public function getTitle () : string;
}
