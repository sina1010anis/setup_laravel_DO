<?php

namespace App\Pattern\StaticFactory\Core;
use App\Pattern\StaticFactory\interface\Car;

final class StaticFactory
{
    public static function factory($type) : Car|\InvalidArgumentException
    {
        if ($type == 'BMW') {
            return new BMW();
        } if ($type == 'Benz') {
            return new Benz();
        } else {
            throw new \InvalidArgumentException('Opps...!');
        }
    }
}
