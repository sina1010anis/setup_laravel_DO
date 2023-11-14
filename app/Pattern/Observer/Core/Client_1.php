<?php

namespace App\Pattern\Observer\Core;
use App\Pattern\Observer\interface\SubjectObserver;

class Client_1 implements SubjectObserver
{
    public function update(string $className, string $nameEvent)
    {
        echo 'Subject '.__CLASS__.' Class => ' . $className.' Event => '.$nameEvent.'<br>';
    }


}
