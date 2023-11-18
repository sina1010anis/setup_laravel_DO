<?php

declare(strict_types=1);

namespace App\Pattern\Test\Decorator\Interface;

abstract class PasswordExt implements HashPasswordExt
{
    public function getPassword()
    {
        return 'password';
    }
}
