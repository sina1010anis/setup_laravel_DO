<?php

namespace App\Pattern\P1\interface;

interface QuerySelect
{
    public function nameDB (string $val) : void;
    public function whereDB (string $val) : void;
    public function getData (int $id);

    public function getStatusConnection();
}
