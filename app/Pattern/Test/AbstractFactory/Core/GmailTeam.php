<?php

declare(strict_types=1);

namespace App\Pattern\Test\AbstractFactory\Core;
use App\Pattern\Test\AbstractFactory\Interface\NotifyImp;

class GmailTeam implements NotifyImp
{
    public function qeueMessage()
    {
        echo 'Team Gmail =(Qeue 1)=(Qeue 2)=(Qeue 3)=(Qeue 4)=(Qeue 5)'.'<br>';
    }

    public function singelMessage()
    {
        echo 'Team Gmail Singel(Message)'.'<br>';
    }

    public function callMessage()
    {
        echo 'Team Gmail call phone (Number)'.'<br>';
    }


}
