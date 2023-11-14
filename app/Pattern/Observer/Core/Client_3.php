<?php

namespace App\Pattern\Observer\Core;
use App\Pattern\Observer\Interface\SubjectObserver;

class Client_3 implements SubjectObserver
{
    public function update(string $className, string $nameEvent)
    {
        echo 'Subject '.__CLASS__.' Class => ' . $className.' Event => '.$nameEvent.'<br>';
    }
}
