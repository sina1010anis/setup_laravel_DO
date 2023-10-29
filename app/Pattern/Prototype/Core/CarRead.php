<?php

namespace App\Pattern\Prototype\Core;

class CarRead
{
    public $txt;
    public function __construct(private $model, public $color, public $price){}
    public function __clone()
    {
        $this->model = 'Copy of '.$this->model;
        $this->color = 'Copy of '.$this->color;
        //$this->price = 'Copy of '.$this->price;
    }

    /**
     * Get the value of model
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set the value of model
     */
    public function setModel($model): self
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get the value of color
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of color
     */
    public function setColor(string $color): self
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get the value of price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     */
    public function setPrice($price): self
    {
        $this->price = $price;

        return $this;
    }
}
