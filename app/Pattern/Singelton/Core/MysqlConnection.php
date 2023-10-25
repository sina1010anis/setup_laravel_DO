<?php

namespace App\Pattern\Singelton\Core;

class MysqlConnection
{
    private static $ins = null;
    public $count_number = 0;

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
        return 'Good Connection ...!';
    }

    public function count()
    {
        $this->count_number++;
    }

    /**
     * Get the value of count_number
     */
    public function getCountNumber()
    {
        return $this->count_number;
    }
}
