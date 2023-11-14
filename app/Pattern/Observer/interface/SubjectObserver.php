<?php

namespace App\Pattern\Observer\interface;

interface SubjectObserver
{
    public function update(string $className, string $nameEvent);
}
