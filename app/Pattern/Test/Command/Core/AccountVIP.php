<?php

declare(strict_types=1);

namespace App\Pattern\Test\Command\Core;

use App\Pattern\Test\Command\Interface\WorldAccountsImp;

class AccountVIP implements WorldAccountsImp
{
    public function onAccount()
    {
        echo 'Accoutn <-- VIP --> (ON)' ;
    }

    public function offAccount()
    {
        echo 'Accoutn <-- VIP --> (OFF)';
    }

    public function deleteAccount()
    {
        echo 'Accoutn <-- VIP --> (Delete)';
    }

    public function logoutAccount()
    {
        echo 'Accoutn <-- VIP --> (Logout)';
    }

    public function qeueAlert()
    {
        echo 'Accoutn <-- VIP --> (Qeue)';
    }


}
