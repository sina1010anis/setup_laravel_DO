<?php

namespace App\Pattern\Proxy\Core;
use App\Pattern\Proxy\interface\BanClinetImp;

class ClinetBan implements BanClinetImp
{
    public function getBlockedClinet() : string
    {
        return 'Cline is ban...!';
    }

    public function openClinet() : string
    {
        return 'Cline not ban...!';
    }
}
