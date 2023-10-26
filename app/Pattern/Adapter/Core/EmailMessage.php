<?php

namespace App\Pattern\Adapter\Core;

class EmailMessage
{
    public $status = [];
    public function emailAddress($email)
    {
        $this->status['address'] = $email;
        return $this;
    }

    public function msgMessage($msg)
    {
        $this->status['msg'] = $msg;
        return $this;
    }

    public function sendMessgae()
    {
        return $this->status;
    }
}
