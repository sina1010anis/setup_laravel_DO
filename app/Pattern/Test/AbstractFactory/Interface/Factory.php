<?php

declare(strict_types=1);

namespace App\Pattern\Test\AbstractFactory\Interface;

interface Factory
{
    public static function factory(string $type);
}
