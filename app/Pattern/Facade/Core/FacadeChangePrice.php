<?php

namespace App\Pattern\Facade\Core;

use App\Pattern\Facade\Classes\ChangeBackBank;
use App\Pattern\Facade\Classes\ChangeBank;
use App\Pattern\Facade\Classes\ChangePrice;
use App\Pattern\Facade\Classes\ChangeProfile;
use App\Pattern\Facade\interface\ChangeIRFromTOImp;

class FacadeChangePrice implements ChangeIRFromTOImp
{
    public $back_bank;
    public $bank;
    public $price;
    public $profile;
    public function __clone(){}
    public function __construct()
    {
        $this->back_bank = new ChangeBackBank();
        $this->bank = new ChangeBank();
        $this->price = new ChangePrice();
        $this->profile = new ChangeProfile();

    }
    public function setTO()
    {
        return [$this->back_bank->changeTOBack(),
        $this->bank->changeTOBank(),
        $this->price->changeTOPrice(),
        $this->profile->changeTOProfile()];
    }

    public function setIR()
    {
        return [$this->back_bank->changeIRBack(),
        $this->bank->changeIRBank(),
        $this->price->changeIRPrice(),
        $this->profile->changeIRProfile()];
    }
}
