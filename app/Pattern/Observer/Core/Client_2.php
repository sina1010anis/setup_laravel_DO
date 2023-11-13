<?php

namespace App\Pattern\Observer\Core;
use App\Pattern\Observer\Interface\SubjectObserver;

class Client_2 implements SubjectObserver
{
    public function update(string $nameClass, string $nameEvent)
    {
        echo 'Subject '.__CLASS__.' Class => ' . $nameClass.' Event => '.$nameEvent.'<br>';
    }
}
