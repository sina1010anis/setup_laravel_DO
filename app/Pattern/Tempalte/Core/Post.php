<?php

declare(strict_types=1);

namespace App\Pattern\Tempalte\Core;
use App\Pattern\Tempalte\Interface\SendNotify;

class Post extends SendNotify
{
    public function typeMessage(): self
    {
        $this->message = 'Post On Send';
        return $this;
    }


}
