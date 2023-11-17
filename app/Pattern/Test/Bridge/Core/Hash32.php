<?php

declare(strict_types=1);

namespace App\Pattern\Test\Bridge\Core;

use App\Pattern\Test\Bridge\Interface\Abstraction;

class Hash32 extends Abstraction
{
    public function connection(string $username) : string|array
    {
        return ['username' => $this->implementer->connection($username), 'hash64' => '32##'.$this->implementer->connection($username).'##32'];
    }


}
