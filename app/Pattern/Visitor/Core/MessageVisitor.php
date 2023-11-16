<?php

declare(strict_types=1);

namespace App\Pattern\Visitor\Core;

use App\Pattern\Visitor\Interface\NotifyBoxImp;

class MessageVisitor
{
    public function accept(NotifyBoxImp $notifyBoxImp)
    {
        return $notifyBoxImp->send(). 'Visitor';
    }
}
