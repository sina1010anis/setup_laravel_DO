<?php

namespace App\Pattern\Adapter\Core;

class SMSMessage
{
    public $status = [];
    public function mobileNumber($number)
    {
        $this->status['number'] = $number;
        return $this;
    }

    public function msgMessage($msg)
    {
        $this->status['msg'] = $msg;
        return $this;
    }

    public function sendSMS()
    {
        return $this->status;
    }
}
