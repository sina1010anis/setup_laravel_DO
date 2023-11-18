<?php

declare(strict_types=1);

namespace App\Pattern\Test\Composeit\Interface;

abstract class TopCompositImp implements DownCompositeImp
{
    protected $composite = [];
    public function __construct(protected string $title){}
    public function addComposite(DownCompositeImp $title)
    {
        $this->composite[] = $title;
    }
    public abstract function show();
}
