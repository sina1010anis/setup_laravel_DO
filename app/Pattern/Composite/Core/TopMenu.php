<?php

namespace App\Pattern\Composite\Core;
use App\Pattern\Composite\interface\InterfaceMenu;

class TopMenu implements InterfaceMenu
{
    public $item = [];
    public $text = '';
    public function show($text = null) : string
    {
        $this->text .= 'Show -->'.PHP_EOL;
        foreach ($this->item as $item) {
            $this->text .= $item->show().PHP_EOL;
        }
        $this->text .= '<-- Show';
        return $this->text;
    }

    public function addItem(InterfaceMenu $interfaceMenu)
    {
        $this->item[] = $interfaceMenu ;
    }
}
