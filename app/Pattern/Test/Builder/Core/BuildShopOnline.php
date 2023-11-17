<?php

declare(strict_types=1);

namespace App\Pattern\Test\Builder\Core;

use App\Pattern\Test\Builder\Interface\FrontPageBuilder;

class BuildShopOnline extends ShopOnline implements FrontPageBuilder
{
    public function build()
    {
        echo $this->header();
        echo $this->slidbar();
        echo $this->menu();
        echo $this->index();
        echo $this->footer();
    }


}
