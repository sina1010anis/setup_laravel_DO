<?php

namespace App\Pattern\Mediator\Core;
use App\Pattern\Mediator\Interface\SendMessageColleagueExt;

class Email extends SendMessageColleagueExt
{
    public function sendEvent(string $title_event)
    {
        echo 'Good Job (is send Email) :)';
    }
}
