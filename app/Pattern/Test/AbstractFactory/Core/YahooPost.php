<?php

declare(strict_types=1);

namespace App\Pattern\Test\AbstractFactory\Core;
use App\Pattern\Test\AbstractFactory\Interface\NotifyImp;

class YahooPost implements NotifyImp
{
    public function qeueMessage()
    {
        echo 'Post Yahoo =(Qeue 1)=(Qeue 2)=(Qeue 3)=(Qeue 4)=(Qeue 5)'.'<br>';
    }

    public function singelMessage()
    {
        echo 'Post Yahoo Singel(Message)'.'<br>';
    }

    public function callMessage()
    {
        echo 'Post Yahoo call phone (Number)'.'<br>';
    }


}
