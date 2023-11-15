<?php

namespace App\Http\Controllers;

use App\Pattern\Adapter\Core\EmailMessageAdpter;
use App\Pattern\Adapter\Core\SMSMessageAdpter;
use App\Pattern\Bridge\Core\Benz;
use App\Pattern\Bridge\Core\BMW;
use App\Pattern\Bridge\Core\Green;
use App\Pattern\Bridge\Core\Red;
use App\Pattern\Composite\Core\DownMenu;
use App\Pattern\Composite\Core\TopMenu;
use App\Pattern\Decorator\Core\Food_1;
use App\Pattern\Decorator\Core\Option\BigFood;
use App\Pattern\Decorator\Core\Option\ChizFood;
use App\Pattern\DependencyInjection\Core\ConfigDatabase;
use App\Pattern\DependencyInjection\Core\ConnectDatabase;
use App\Pattern\Facade\Core\FacadeChangePrice;
use App\Pattern\Flyweight\Core\FlyweightProduct;
use App\Pattern\Proxy\Core\ClinetBanProxy;
use Illuminate\Http\Request;

class StructuralController extends Controller
{
    public function adapter()
    {
        $snederSMS = new SMSMessageAdpter('09395231890', 'hi...!(SMS)');
        $snederEmail = new EmailMessageAdpter('sina1010anis@gmail.com', 'hi...!(Email)');
        dump($snederSMS->send());
        dump($snederEmail->send());
    }

    public function bridge()
    {
        $bmw_red = new BMW(new Red());
        $bmw_green = new BMW(new Green());
        $benz_red = new Benz(new Red());
        $benz_green = new Benz(new Green());
        dump($bmw_red->setupColor());
        dump($bmw_green->setupColor());
        dump($benz_red->setupColor());
        dump($benz_green->setupColor());
    }
    public function composite()
    {
        $menu_1 = new TopMenu('Mobile');
        $menu_1->addMenu(new DownMenu('Samsung'));
        $menu_1->addMenu(new DownMenu('Iphone'));
        $menu_1->addMenu(new DownMenu('LG'));
        $menu_1->addMenu(new DownMenu('Song'));

        $menu_2 = new TopMenu('Laptop');
        $menu_2->addMenu(new DownMenu('Asus'));
        $menu_2->addMenu(new DownMenu('Lenovo'));
        $menu_2->addMenu(new DownMenu('HP'));
        $menu_2->addMenu(new DownMenu('Microsoft'));

        $menu = new TopMenu('Digital');
        $menu->addMenu($menu_1);
        $menu->addMenu($menu_2);

        return $menu->show();
    }

    public function decorator()
    {
        // $buy_product_1 = new Product_1();
        // echo (new BoxProduct(new BoxProduct(new GardProduct(new GardProduct($buy_product_1)))))->buyProductInViewPrice();

        $food_order = new Food_1();
        echo (new ChizFood(new BigFood(new ChizFood(new BigFood(new BigFood($food_order))))))->nameFood();
    }

    public function dependencyInjection()
    {
        $config_database = new ConfigDatabase('root', 'password', 'shop', '127.0.0.1');
        $connect_database = new ConnectDatabase($config_database);
        echo $connect_database->connect();
    }

    public function facade()
    {
        $change_to = new FacadeChangePrice();
        $change_ir = clone $change_to;

        echo '<pre>';
        print_r( $change_to->setTO());
        echo '</pre>';
        echo '<pre>';
        print_r( $change_ir->setIR());
        echo '</pre>';
    }

    public function flyweight()
    {
        $name_products = ['M Samsung s22', 'L Surface laptop 5 ', 'M Iphone 15', 'L Hp Omen 16.1'];
        $flyweight = new FlyweightProduct();
        for ($i = 0 ; $i <= 10 ; $i++) {
            foreach ($name_products as $name_product) {
                $fly = $flyweight->sreachClass($name_product);
                echo $fly->getName($name_product);
            }
        }

        dd($flyweight->getForIf());
    }

    public function proxy ()
    {
        $clinet_ban = new ClinetBanProxy();
        echo $clinet_ban->ban(true);
    }

}
