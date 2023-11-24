<?php

declare(strict_types=1);

namespace App\Pattern\Test\Command\Interface;

interface WorldAccountsImp
{
    public function onAccount();
    public function offAccount();
    public function deleteAccount();
    public function logoutAccount();
    public function qeueAlert();
}
