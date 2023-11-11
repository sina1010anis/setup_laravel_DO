<?php

namespace App\Pattern\Mediator\Core;
use App\Pattern\Mediator\Interface\Mediator;

class SendMessageMobileAndEmail implements Mediator
{
    public function __construct(private $txt){}
    public function sendNotify($event)
    {
        if ($event instanceof Email) {
            return $event->sendEvent('Email =>'.'test');
        } else if ($event instanceof Mobile) {
            return $event->sendEvent('Mobile =>'.'mobile');
        } else {
            throw new \Exception('Not find Classes...!');
        }
    }

}
