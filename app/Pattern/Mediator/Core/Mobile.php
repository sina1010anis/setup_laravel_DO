<?php

namespace App\Pattern\Mediator\Core;

use App\Pattern\Mediator\Interface\SendMessageColleagueExt;

class Mobile extends SendMessageColleagueExt
{
    public function sendEvent(string $title_event)
    {
        echo 'Ohh yes (is send Mobile) :)';
    }
}
