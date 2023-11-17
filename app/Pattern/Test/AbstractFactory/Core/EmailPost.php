<?php

declare(strict_types=1);

namespace App\Pattern\Test\AbstractFactory\Core;
use App\Pattern\Test\AbstractFactory\Interface\NotifyImp;
use App\Pattern\Test\AbstractFactory\Interface\PostImp;

class EmailPost implements PostImp
{
    public function qeueMessage()
    {
        echo 'Post Email =(Qeue 1)=(Qeue 2)=(Qeue 3)=(Qeue 4)=(Qeue 5)'.'<br>';
    }

    public function singelMessage()
    {
        echo 'Post Email Singel(Message)'.'<br>';
    }

    public function callMessage()
    {
        echo 'Post Email call phone (Number)'.'<br>';
    }


}
