<?php

namespace App\Pattern\P1\Core\Abs\interface;

use App\Pattern\P1\interface\QueryDelete;
use App\Pattern\P1\interface\QuerySelect;

interface QueryAbs
{
    public function selectDB () : QuerySelect;
    public function deleteDB () : QueryDelete;
}
