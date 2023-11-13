<?php

declare(strict_types=1);

namespace App\Pattern\Observer\Interface;

interface SubjectObserver
{
    public function update(string $className, string $nameEvent);
}
