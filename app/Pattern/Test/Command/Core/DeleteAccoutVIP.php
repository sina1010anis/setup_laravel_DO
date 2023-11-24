<?php

declare(strict_types=1);

namespace App\Pattern\Test\Command\Core;
use App\Pattern\Test\Command\Interface\CommandAccount;
use App\Pattern\Test\Command\Interface\WorldAccountsImp;

class DeleteAccoutVIP implements CommandAccount
{
    public $account;
    public function __construct()
    {
        $this->account = new AccountVIP();
    }
    public function exec()
    {
        $this->account->logoutAccount();
        $this->account->offAccount();
        $this->account->deleteAccount();
    }


}
