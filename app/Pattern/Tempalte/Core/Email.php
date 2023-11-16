<?php

declare(strict_types=1);

namespace App\Pattern\Tempalte\Core;
use App\Pattern\Tempalte\Interface\SendNotify;

class Email extends SendNotify
{
    public function typeMessage(): self
    {
        $this->message = 'Email On Send';
        return $this;
    }


}
