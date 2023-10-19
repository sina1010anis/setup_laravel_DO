<?php

namespace App\Pattern\AbstractFactory\Interface;

interface AbsFactory
{
    public function createSelect() : ISelect ;
    public function createUpdate() : IUpdate ;
}
