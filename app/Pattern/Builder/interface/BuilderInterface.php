<?php
namespace App\Pattern\Builder\interface;

interface BuilderInterface
{
    public function build(DBConnect $dBConnect) : void;
}
