<?php

declare(strict_types=1);

namespace App\Pattern\Test\Command\Interface;

interface InvokerAccount
{
    public function invoker(CommandAccount $commandAccount);
}
