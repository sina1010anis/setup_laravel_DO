<?php

namespace App\Pattern\Composite\Core;
use App\Pattern\Composite\AbstractTopMenu\TopMenuExt;
use App\Pattern\Composite\interface\MenuCompositeImp;

class DownMenu implements MenuCompositeImp
{
    public function __construct(public string $name_menu){}
    public function show() : string
    {
        return (string) $this->name_menu;
    }
}
