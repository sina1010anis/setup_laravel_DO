<?php

declare(strict_types=1);

namespace App\Pattern\Test\AbstractFactory\Core\Factory;

use App\Pattern\Test\AbstractFactory\Core\YahooPost;
use App\Pattern\Test\AbstractFactory\Core\YahooSend;
use App\Pattern\Test\AbstractFactory\Core\YahooTeam;
use App\Pattern\Test\AbstractFactory\Interface\Factory;
use App\Pattern\Test\AbstractFactory\Interface\NotifyImp;

class YahooMessage implements Factory
{
    public static function factory(string $type)
    {
        if ($type == 'notify') {
            return new YahooSend();
        } else if ($type == 'post') {
            return new YahooPost();
        } else if ($type == 'team') {
            return new YahooTeam();
        } else {
            return new \Exception('Class not found...!');
        }
    }
}
