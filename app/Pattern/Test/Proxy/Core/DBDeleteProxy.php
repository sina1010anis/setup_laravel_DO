<?php

declare(strict_types=1);

namespace App\Pattern\Test\Proxy\Core;

class DBDeleteProxy
{
    private bool $ok = false;
    public function proxy()
    {
        if (!$this->ok) {
            $this->ok = true;
            info('DB Delete...!');
            return new DBDelete();
        }
        return 'Proxy';
    }
}
