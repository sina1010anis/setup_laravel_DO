<?php

namespace App\Pattern\DependencyInjection\Core;

class ConfigDatabase
{
    public function __construct(public $username, public $password, public $db, public $host){}

    public function getUsername()
    {
        return $this->username;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getDb()
    {
        return $this->db;
    }

    public function getHost()
    {
        return $this->host;
    }
}
