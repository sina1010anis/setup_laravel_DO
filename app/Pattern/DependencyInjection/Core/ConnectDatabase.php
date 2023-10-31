<?php

namespace App\Pattern\DependencyInjection\Core;

class ConnectDatabase
{
    public function __construct(public ConfigDatabase $configDatabase){}

    public function connect()
    {
        return $this->configDatabase->getUsername().' ; '.$this->configDatabase->getPassword().' ; '.$this->configDatabase->getHost().' ; '.$this->configDatabase->getDb();
    }
}
