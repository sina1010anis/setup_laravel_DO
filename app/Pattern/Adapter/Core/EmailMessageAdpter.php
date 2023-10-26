<?php

namespace App\Pattern\Adapter\Core;
use App\Pattern\Adapter\interface\MessageAdapter;

class EmailMessageAdpter implements MessageAdapter
{
    public $notif;
    public function __construct(public string $email, public string $msg)
    {
        $this->notif = new EmailMessage();
    }

    public function send()
    {
        return $this->notif->emailAddress($this->email)->msgMessage($this->msg)->sendMessgae();
    }
}
