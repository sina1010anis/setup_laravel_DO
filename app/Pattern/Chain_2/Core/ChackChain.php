<?php

namespace App\Pattern\Chain_2\Core;

use App\Pattern\Chain_2\interface\MinExt;

class ChackChain
{
    private $storage_min = [];
    private $status = true;

    public function check()
    {
        foreach ($this->storage_min as $min) {
            if ($this->status) {
                try {
                    $min->handel();
                } catch (\Exception $e) {
                    echo $e->getMessage();
                    $this->status = false;
                }
            }
        }
    }

    public function addMin(MinExt $minExt)
    {
        $this->storage_min[] = $minExt;

        return $this;
    }
}
