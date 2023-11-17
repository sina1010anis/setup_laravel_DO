<?php

declare(strict_types=1);

namespace App\Pattern\Test\AbstractFactory\Core\Factory;

use App\Pattern\Test\AbstractFactory\Core\EmailPost;
use App\Pattern\Test\AbstractFactory\Core\EmailSend;
use App\Pattern\Test\AbstractFactory\Core\EmailTeam;
use App\Pattern\Test\AbstractFactory\Interface\Factory;
use App\Pattern\Test\AbstractFactory\Interface\NotifyImp;

class EmailMessage implements Factory
{
    public static function factory(string $type)
    {
        if ($type == 'notify') {
            return new EmailSend();
        } else if ($type == 'post') {
            return new EmailPost();
        } else if ($type == 'team') {
            return new EmailTeam();
        } else {
            return new \Exception('Class not found...!');
        }
    }
}
