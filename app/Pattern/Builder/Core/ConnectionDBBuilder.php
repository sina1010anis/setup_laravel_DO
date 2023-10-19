<?php

namespace App\Pattern\Builder\Core;
use App\Pattern\Builder\interface\BuilderInterface;
use App\Pattern\Builder\interface\DBConnect;

class ConnectionDBBuilder implements BuilderInterface
{
    public function build(DBConnect $dBConnect) :void
    {
        echo $dBConnect->setUsername('root').PHP_EOL;
        echo $dBConnect->setPassword('root').PHP_EOL;
        echo $dBConnect->checkConnection().PHP_EOL;
    }
}
