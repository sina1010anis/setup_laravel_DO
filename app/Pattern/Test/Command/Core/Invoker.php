<?php

declare(strict_types=1);

namespace App\Pattern\Test\Command\Core;

use App\Pattern\Test\Command\Interface\CommandAccount;
use App\Pattern\Test\Command\Interface\InvokerAccount;

class Invoker implements InvokerAccount
{
    public function invoker(CommandAccount $commandAccount)
    {
        $commandAccount->exec();
    }


}
