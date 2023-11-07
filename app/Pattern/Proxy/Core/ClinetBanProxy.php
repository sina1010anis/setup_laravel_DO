<?php

namespace App\Pattern\Proxy\Core;

use Illuminate\Support\Facades\Log;

class ClinetBanProxy extends ClinetBan
{
    public $stuasClinet;
    public function ban (bool $status)
    {
        Log::info('change status Clinet');
        if ($status) {
            if ($this->stuasClinet != $this->getBlockedClinet()) {
                Log::alert('clinet is ban ...........');
                $this->stuasClinet = $this->getBlockedClinet();
            }
        } else {
            if ($this->stuasClinet != $this->openClinet()) {
                Log::alert('clinet is open ...........');
                $this->stuasClinet = $this->openClinet();
            }
        }

        return $this->stuasClinet;
    }
}
