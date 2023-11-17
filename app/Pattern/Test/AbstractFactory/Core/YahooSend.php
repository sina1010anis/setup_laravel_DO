<?php

declare(strict_types=1);

namespace App\Pattern\Test\AbstractFactory\Core;
use App\Pattern\Test\AbstractFactory\Interface\NotifyImp;

class YahooSend implements NotifyImp
{
    public function qeueMessage()
    {
        echo 'Notify Yahoo =(Qeue 1)=(Qeue 2)=(Qeue 3)=(Qeue 4)=(Qeue 5)'.'<br>';
    }

    public function singelMessage()
    {
        echo 'Notify Yahoo Singel(Message)'.'<br>';
    }

    public function callMessage()
    {
        echo 'Notify Yahoo call phone (Number)'.'<br>';
    }


}
