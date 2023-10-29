<?php

namespace App\Pattern\Composite\Core;
use App\Pattern\Composite\interface\InterfaceMenu;

class DownMenu implements InterfaceMenu
{
    public $text;
    public function __construct($text)
    {
        $this->text = $text;
    }
    public function show($text = null) : string
    {
        return $this->text;
    }
}
