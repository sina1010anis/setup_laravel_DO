<?php

namespace App\Pattern\P1\interface;

interface QueryDelete
{
    public function nameDB (string $val) : void;
    public function whereDB (string $val) : void;
    public function deleteData (int $id);

    public function getStatusConnection();

}
