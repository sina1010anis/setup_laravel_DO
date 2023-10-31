<?php

namespace App\Pattern\Composite\AbstractTopMenu;
use App\Pattern\Composite\interface\MenuCompositeImp;

abstract class TopMenuExt implements MenuCompositeImp
{
    public function __construct(public $name_menu){}

    abstract public function show() : string;
}
