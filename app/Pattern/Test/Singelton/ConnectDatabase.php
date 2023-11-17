<?php

namespace App\Pattern\Test\Singelton;

class ConnectDatabase
{
    private static $in_class = null;
    private function __construct()
    {

    }

    public static function singelton()
    {
        if (self::$in_class == null) {
            self::$in_class = new self();
        }
        return self::$in_class;
    }

    public function hello()
    {
        return 'Hello World ...! as PHP';
    }
}
