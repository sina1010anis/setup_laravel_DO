<?php

namespace App\Pattern\Memento\interface;

use App\Pattern\Memento\Core\MemontoVersion;

abstract class ShowVersionImp
{
    protected $version;

    public abstract function getVeriosn() : string;
    public function setVeriosn(MemontoVersion $version) : void
    {
        $this->version = $version->buildVersionContBaseModel();
    }
}
