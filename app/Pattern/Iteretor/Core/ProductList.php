<?php

namespace App\Pattern\Iteretor\Core;

use App\Pattern\Iteretor\Interface\ProductCheckerImp;
use Exception;

class ProductList
{
    private $counter = 1;
    public $poolProduct = [];

    public function addProduct(ProductCheckerImp $product)
    {
        $this->poolProduct[] = $product;
    }

    public function countProducts()
    {
        return count($this->poolProduct);
    }

    public function showByOneKey($key)
    {
        try{
            return $this->poolProduct[$key];
        } catch(Exception $e) {
            throw new Exception("Not find Product...!");
        }
    }

    public function showByOneCounter()
    {
        if ($this->counter <= $this->countProducts()-1) {
            return $this->poolProduct[$this->counter];
        }
    }
    public function nextCounter()
    {
        $this->counter = $this->counter * 2;
    }

    public function restartCounter()
    {
        $this->counter = 0;
    }


    public function getCounter()
    {
        return $this->counter;
    }
}
