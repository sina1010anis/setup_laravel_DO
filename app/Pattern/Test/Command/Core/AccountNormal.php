<?php

declare(strict_types=1);

namespace App\Pattern\Test\Command\Core;

use App\Pattern\Test\Command\Interface\WorldAccountsImp;

class AccountNormal implements WorldAccountsImp
{
    public function onAccount()
    {
        echo 'Accoutn <-- Normal --> (ON)' ;
    }

    public function offAccount()
    {
        echo 'Accoutn <-- Normal --> (OFF)';
    }

    public function deleteAccount()
    {
        echo 'Accoutn <-- Normal --> (Delete)';
    }

    public function logoutAccount()
    {
        echo 'Accoutn <-- Normal --> (Logout)';
    }

    public function qeueAlert()
    {
        echo 'Accoutn <-- Normal --> (Qeue)';
    }


}
