<?php

namespace App\Pattern\P1\Core\Factory\interface;

use App\Pattern\P1\Core\Builder\interface\BuilderDB;

interface FactoryDB
{
    public function create(string $data) : BuilderDB;
}
