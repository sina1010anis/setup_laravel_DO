<?php

declare(strict_types=1);

namespace App\Pattern\Test\Strategy\Core;

use App\Pattern\Test\Strategy\Interface\SendNameDB;

class NameDBStrategy
{
    public function sendName(SendNameDB $sendNameDB) : string
    {
        return $sendNameDB->send();
    }
}
