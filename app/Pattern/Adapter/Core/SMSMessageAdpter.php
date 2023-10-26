<?php

namespace App\Pattern\Adapter\Core;
use App\Pattern\Adapter\interface\MessageAdapter;

class SMSMessageAdpter implements MessageAdapter
{
    public $notif;
    public function __construct(public string $number, public string $msg)
    {
        $this->notif = new SMSMessage();
    }

    public function send()
    {
        return $this->notif->mobileNumber($this->number)->msgMessage($this->msg)->sendSMS();
    }
}
