<?php

declare(strict_types=1);

namespace App\Pattern\Test\Decorator\Core;

use App\Pattern\Test\Decorator\Interface\HashPasswordExt;
use App\Pattern\Test\Decorator\Interface\PasswordExt;

class Hash32 implements HashPasswordExt
{
    private const HASH = '234e234e23edqwe9847qw';
    public function __construct(public HashPasswordExt $password){}
    public function getPassword()
    {
        return $this->password->getPassword().' '.self::HASH;
    }


}
