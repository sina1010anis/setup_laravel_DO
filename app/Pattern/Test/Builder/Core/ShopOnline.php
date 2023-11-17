<?php

namespace App\Pattern\Test\Builder\Core;
use App\Pattern\Test\Builder\Interface\FrontPageImp;

class ShopOnline implements FrontPageImp
{
    public function header()
    {
        return 'Build /===---------/( 25% ) -- Header --'.'<br>';
    }

    public function slidbar()
    {
        return 'Build /======------/( 50% ) -- Sildbar --'.'<br>';
    }

    public function menu()
    {
        return 'Build /========----/( 60% ) -- Menu --'.'<br>';
    }

    public function index()
    {
        return 'Build /===========-/( 90% ) -- Index --'.'<br>';
    }

    public function footer()
    {
        return 'Build /============/( 100% ) -- Footer --'.'<br>';
    }


}
