<?php

namespace App\Pattern\Composite\Core;
use App\Pattern\Composite\AbstractTopMenu\TopMenuExt;
use App\Pattern\Composite\interface\MenuCompositeImp;

class TopMenu extends TopMenuExt
{
    public $menus = [];
    public function show() : string
    {
        $str = '';
        $str .= '<ol><li>'.$this->name_menu.'<ul>';
        foreach ($this->menus as $menu) {
            $str .= '<li>'.$menu->show().'</li>';
        }
        $str .='</ul></li></ol>';

        return $str;
    }

    public function addMenu (MenuCompositeImp $menuExt)
    {
        $this->menus[] = $menuExt;
    }
}
