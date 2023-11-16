<?php

declare(strict_types=1);

namespace App\Pattern\Tempalte\Interface;

abstract class SendNotify
{
    public $message;
    public function send()
    {
        return $this->message;
    }

    public abstract function typeMessage(): self;
}
