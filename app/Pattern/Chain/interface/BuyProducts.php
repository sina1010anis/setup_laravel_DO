<?php

namespace App\Pattern\Chain\interface;

abstract class BuyProducts
{
    protected $tempNextClass;

    public function nextClass ()
    {

        if (isset($this->tempNextClass)) {
            $this->tempNextClass->checkInClass();
        }

    }

    public function setTempNextClass(BuyProducts $tempNextClass) : void
    {

        $this->tempNextClass = $tempNextClass;

    }

    public abstract function checkInClass();

}
