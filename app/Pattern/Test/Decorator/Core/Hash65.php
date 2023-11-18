<?php

declare(strict_types=1);

namespace App\Pattern\Test\Decorator\Core;

use App\Pattern\Test\Decorator\Interface\HashPasswordExt;
use App\Pattern\Test\Decorator\Interface\PasswordExt;

class Hash65 implements HashPasswordExt
{
    private const HASH = '949848848484';
    public function __construct(public HashPasswordExt $password){}
    public function getPassword()
    {
        return $this->password->getPassword().' '.self::HASH;
    }


}
