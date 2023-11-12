<?php

declare(strict_types=1);

namespace App\Pattern\Memento\Core;

use Illuminate\Support\Str;
class MemontoVersion
{
    public function __construct(private ClientVersion $client, private ServerVersion $server)
    {
        $client->setVeriosn($this);
        $server->setVeriosn($this);
    }

    public function getVeriosnServer()
    {
        return $this->server->getVeriosn();
    }

    public function getVeriosnClient()
    {
        return $this->client->getVeriosn();
    }

    public function buildVersionContBaseModel()
    {
        return Str::password(25);
    }

}
