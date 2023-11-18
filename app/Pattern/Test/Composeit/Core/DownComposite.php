<?php

declare(strict_types=1);

namespace App\Pattern\Test\Composeit\Core;
use App\Pattern\Test\Composeit\Interface\DownCompositeImp;

class DownComposite implements DownCompositeImp
{
    public function __construct(private string $title){}
    public function show()
    {
        return $this->title.PHP_EOL;
    }
}
