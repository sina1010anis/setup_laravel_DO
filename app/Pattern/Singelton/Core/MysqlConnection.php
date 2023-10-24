<?php

namespace App\Pattern\Singelton\Core;

class MysqlConnection
{
    private static $ins = null;

    private function __construct (){}

    public static function setupIns ()
    {
        if (self::$ins == null) {
            self::$ins = new MysqlConnection();
        }
        return self::$ins;
    }

    public function checkConnection ()
    {
        dd('Good Connection ...!');
    }
}
