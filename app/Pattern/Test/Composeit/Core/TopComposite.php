<?php

declare(strict_types=1);

namespace App\Pattern\Test\Composeit\Core;
use App\Pattern\Test\Composeit\Interface\DownCompositeImp;
use App\Pattern\Test\Composeit\Interface\TopCompositImp;

class TopComposite extends TopCompositImp
{
    public function show()
    {
        echo $this->title.PHP_EOL.'(';
        foreach ($this->composite as $composite) {
            echo $composite->show().PHP_EOL;
        }
        echo ')'.$this->title;
    }
}
