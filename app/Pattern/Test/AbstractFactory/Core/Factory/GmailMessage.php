<?php

declare(strict_types=1);

namespace App\Pattern\Test\AbstractFactory\Core\Factory;

use App\Pattern\Test\AbstractFactory\Core\GmailPost;
use App\Pattern\Test\AbstractFactory\Core\GmailSend;
use App\Pattern\Test\AbstractFactory\Core\GmailTeam;
use App\Pattern\Test\AbstractFactory\Interface\Factory;
use App\Pattern\Test\AbstractFactory\Interface\NotifyImp;

class GmailMessage implements Factory
{
    public static function factory(string $type)
    {
        if ($type == 'notify') {
            return new GmailSend();
        } else if ($type == 'post') {
            return new GmailPost();
        } else if ($type == 'team') {
            return new GmailTeam();
        } else {
            return new \Exception('Class not found...!');
        }
    }
}
