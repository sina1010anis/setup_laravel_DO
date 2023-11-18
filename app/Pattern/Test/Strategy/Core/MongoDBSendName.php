<?php

declare(strict_types=1);

namespace App\Pattern\Test\Strategy\Core;
use App\Pattern\Test\Strategy\Interface\SendNameDB;

class MongoDBSendName implements SendNameDB
{
    public function send()
    {
        return 'MongoDB';
    }


}
