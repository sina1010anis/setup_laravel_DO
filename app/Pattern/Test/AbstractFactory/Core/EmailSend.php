<?php

declare(strict_types=1);

namespace App\Pattern\Test\AbstractFactory\Core;
use App\Pattern\Test\AbstractFactory\Interface\NotifyImp;

class EmailSend implements NotifyImp
{
    public function qeueMessage()
    {
        echo 'Notify Email =(Qeue 1)=(Qeue 2)=(Qeue 3)=(Qeue 4)=(Qeue 5)'.'<br>';
    }

    public function singelMessage()
    {
        echo 'Notify Email Singel(Message)'.'<br>';
    }

    public function callMessage()
    {
        echo 'Notify Email call phone (Number)'.'<br>';
    }


}
