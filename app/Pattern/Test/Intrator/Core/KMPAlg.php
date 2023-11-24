<?php

declare(strict_types=1);

namespace App\Pattern\Test\Intrator\Core;

class KMPAlg
{
    private $storage = [];
    private $item;
    private int $max;

    public function setStorage($storage): self
    {
        $this->storage[] = $storage;

        return $this;
    }

    public function getStorage()
    {
        return $this->storage;
    }


    public function nextItem(): int
    {
        return 2;
    }

    public function getItem()
    {
        return $this->storage[$this->item];
    }

    public function setItem($item): self
    {
        $this->item = $item;

        return $this;
    }

    public function getMax()
    {
        $this->max = count($this->storage);
        return $this->max;
    }
}
