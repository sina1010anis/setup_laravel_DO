<?php

declare(strict_types=1);

namespace App\Pattern\Visitor\Core;

use App\Pattern\Visitor\Interface\NotifyBoxImp;

class EmailNotify implements NotifyBoxImp
{
    public function send()
    {
        return 'Send By Email';
    }


}
