<?php

declare(strict_types=1);

namespace App\Pattern\Test\AbstractFactory\Core;
use App\Pattern\Test\AbstractFactory\Interface\NotifyImp;
use App\Pattern\Test\AbstractFactory\Interface\PostImp;

class EmailTeam implements PostImp
{
    public function qeueMessage()
    {
        echo 'Team Email =(Qeue 1)=(Qeue 2)=(Qeue 3)=(Qeue 4)=(Qeue 5)'.'<br>';
    }

    public function singelMessage()
    {
        echo 'Team Email Singel(Message)'.'<br>';
    }

    public function callMessage()
    {
        echo 'Team Email call phone (Number)'.'<br>';
    }


}
