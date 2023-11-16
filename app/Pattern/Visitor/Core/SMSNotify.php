<?php

declare(strict_types=1);

namespace App\Pattern\Visitor\Core;

use App\Pattern\Visitor\Interface\NotifyBoxImp;

class SMSNotify implements NotifyBoxImp
{
    public function send()
    {
        return 'Send By SMS';
    }


}
