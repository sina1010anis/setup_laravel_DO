<?php

namespace App\Pattern\Strategy\Interface;

interface ConnectionDBImp
{
    public function setDatabase(FunctionDB $database) : self;
    public function connect();
}
